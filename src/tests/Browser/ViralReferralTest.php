<?php

namespace Tests\Browser;

use App\Models\Participant;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Str;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ViralReferralTest extends DuskTestCase
{
    use DatabaseMigrations;

    public function testLandingPageDisplaysReferrerContext(): void
    {
        $referrer = Participant::create([
            'display_name' => 'Referral Hero',
            'country' => 'Spain',
            'contact_method' => 'whatsapp',
            'contact_identifier' => '+3499998888',
            'referral_code' => 'REF'.Str::upper(Str::random(5)),
            'confirmation_code' => '123456',
            'confirmed_at' => now(),
            'fingerprint_hash' => Str::random(40),
            'share_count' => 12,
            'referral_count' => 7,
        ]);

        $this->browse(function (Browser $browser) use ($referrer) {
            $browser->visit(route('landing', ['ref' => $referrer->referral_code]))
                ->waitForText('Launch your viral referral loop')
                ->assertSee('Get your referral link')
                ->assertSee('You were invited!')
                ->assertSee('Referral Hero')
                ->assertSee('Spain')
                ->assertValue('#referral_code', $referrer->referral_code)
                ->assertSee('Verify real fans');
        });
    }

    public function testGuestCanOptInVerifyAndShare(): void
    {
        $this->browse(function (Browser $browser) {
            $fingerprintSelector = json_encode('input[name="fingerprint"]');

            $browser->visit('/')
                ->waitForText('Get your referral link')
                ->waitUsing(10, 100, function () use ($browser, $fingerprintSelector) {
                    $result = $browser->script("const el = document.querySelector({$fingerprintSelector}); return el ? el.value : ''; ");

                    return !empty($result[0] ?? '');
                })
                ->type('#display_name', 'Dusk Tester')
                ->type('#country', 'Testland')
                ->type('#contact_identifier', '+15556667777')
                ->press('Send me the confirmation code')
                ->waitForText('Confirm your opt-in');

            $participant = Participant::latest('id')->first();
            $this->assertNotNull($participant, 'Participant record was not created.');

            $browser->type('#code', $participant->confirmation_code)
                ->press('Verify and continue')
                ->waitForText('You are verified! Share your link to climb the leaderboard.')
                ->waitForText('Grow the fastest, win the biggest rewards')
                ->with('.break-all', function (Browser $share) use ($participant) {
                    $share->assertSee($participant->referral_code);
                });

            $browser->script('navigator.share = null;');
            $browser->script('navigator.clipboard = { writeText: () => Promise.resolve() };');

            $browser->press('Share now')
                ->waitForText('Copied your share message to the clipboard!');

            $participant->refresh();
            $this->assertNotNull($participant->confirmed_at);
            $this->assertSame(1, $participant->share_count);

            $browser->visit('/leaderboard')
                ->waitForText('Grow the fastest, win the biggest rewards')
                ->assertSee('1 logged shares');
        });
    }
}
