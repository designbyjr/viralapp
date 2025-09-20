import { Head, Link, router, usePage } from '@inertiajs/react';
import { useState } from 'react';

export default function Leaderboard({ leaders = [], prizes = [], shareLink, shareMessage, currentParticipant }) {
    const { flash } = usePage().props;
    const [status, setStatus] = useState(null);

    const handleShare = async () => {
        if (!shareLink) {
            setStatus({ type: 'error', message: 'Generate your link by completing the opt-in form first.' });
            return;
        }

        const message = shareMessage ?? shareLink;

        try {
            if (navigator.share) {
                await navigator.share({
                    title: document.title,
                    text: message,
                    url: shareLink,
                });
            } else if (navigator.clipboard) {
                await navigator.clipboard.writeText(message);
                setStatus({ type: 'success', message: 'Copied your share message to the clipboard!' });
            }

            router.post(
                '/share',
                { referral_code: currentParticipant?.referral_code },
                {
                    preserveScroll: true,
                    preserveState: true,
                    onSuccess: () => {
                        if (!navigator.clipboard) {
                            setStatus({ type: 'success', message: 'Thanks for sharing the campaign!' });
                        }
                    },
                }
            );
        } catch (error) {
            setStatus({ type: 'error', message: 'We could not launch sharing on this device. Try copying the link manually.' });
        }
    };

    return (
        <div className="min-h-screen bg-slate-950">
            <Head title="Leaderboard" />
            <div className="mx-auto flex max-w-6xl flex-col gap-12 px-6 py-16">
                <header className="rounded-3xl border border-white/10 bg-slate-900/80 p-10 shadow-2xl backdrop-blur">
                    <div className="flex flex-col gap-6 lg:flex-row lg:items-center lg:justify-between">
                        <div>
                            <p className="text-sm font-semibold uppercase tracking-[0.3em] text-emerald-300">Live leaderboard</p>
                            <h1 className="mt-3 text-4xl font-bold text-white">Grow the fastest, win the biggest rewards</h1>
                            <p className="mt-4 max-w-2xl text-sm text-slate-300">
                                Invite your community, confirm every referral, and keep an eye on the prizes waiting for the top creators. Fraud protection keeps the competition fair for everyone.
                            </p>
                        </div>
                        <div className="flex w-full max-w-sm flex-col gap-4 rounded-2xl border border-emerald-500/30 bg-emerald-500/10 p-6 text-emerald-100">
                            <h2 className="text-lg font-semibold text-white">Share your link</h2>
                            <p className="text-sm text-emerald-100/80">
                                {shareMessage ?? 'Share your custom link to earn verified referrals.'}
                            </p>
                            <button
                                onClick={handleShare}
                                className="rounded-xl bg-emerald-400 px-4 py-3 text-sm font-semibold text-emerald-950 transition hover:bg-emerald-300"
                            >
                                Share now
                            </button>
                            {shareLink && (
                                <p className="break-all text-xs text-emerald-200/70">{shareLink}</p>
                            )}
                        </div>
                    </div>
                </header>

                {status && (
                    <div
                        className={`rounded-2xl border p-4 text-sm ${
                            status.type === 'error'
                                ? 'border-rose-500/40 bg-rose-500/10 text-rose-100'
                                : 'border-emerald-500/40 bg-emerald-500/10 text-emerald-100'
                        }`}
                    >
                        {status.message}
                    </div>
                )}

                {flash?.message && (
                    <div className="rounded-2xl border border-emerald-500/40 bg-emerald-500/10 p-4 text-sm text-emerald-100">
                        {flash.message}
                    </div>
                )}

                <section className="overflow-hidden rounded-3xl border border-white/10 bg-slate-900/70">
                    <table className="min-w-full divide-y divide-white/10 text-left text-sm text-slate-200">
                        <thead>
                            <tr className="bg-white/5 text-xs uppercase tracking-widest text-slate-400">
                                <th className="px-6 py-4">Rank</th>
                                <th className="px-6 py-4">Participant</th>
                                <th className="px-6 py-4">Country</th>
                                <th className="px-6 py-4">Verified referrals</th>
                                <th className="px-6 py-4">Shares logged</th>
                            </tr>
                        </thead>
                        <tbody>
                            {leaders.length === 0 && (
                                <tr>
                                    <td colSpan={5} className="px-6 py-10 text-center text-slate-500">
                                        No referrals yet. Be the first to claim the top spot!
                                    </td>
                                </tr>
                            )}
                            {leaders.map((leader, index) => (
                                <tr
                                    key={leader.id}
                                    className={leader.is_current_user ? 'bg-emerald-500/10 text-white' : index % 2 === 0 ? 'bg-transparent' : 'bg-white/5'}
                                >
                                    <td className="px-6 py-4 font-semibold text-emerald-200">#{index + 1}</td>
                                    <td className="px-6 py-4">
                                        {leader.display_name}
                                        {leader.is_current_user && <span className="ml-2 rounded-full bg-emerald-500/20 px-2 py-0.5 text-xs text-emerald-100">You</span>}
                                    </td>
                                    <td className="px-6 py-4">{leader.country}</td>
                                    <td className="px-6 py-4 font-semibold text-white">{leader.referral_count}</td>
                                    <td className="px-6 py-4">{leader.share_count}</td>
                                </tr>
                            ))}
                        </tbody>
                    </table>
                </section>

                <section className="grid gap-6 rounded-3xl border border-white/10 bg-slate-900/60 p-8 md:grid-cols-3">
                    {prizes.map((prize, index) => (
                        <div key={index} className="rounded-2xl border border-white/10 bg-white/5 p-6">
                            <p className="text-xs uppercase tracking-widest text-emerald-200">Reward {index + 1}</p>
                            <h3 className="mt-2 text-xl font-semibold text-white">{prize.name}</h3>
                            <p className="mt-2 text-sm text-slate-300">{prize.requirement}</p>
                        </div>
                    ))}
                </section>

                <div className="rounded-3xl border border-white/10 bg-slate-900/70 p-8 text-sm text-slate-300">
                    {currentParticipant ? (
                        <p>
                            You have <span className="font-semibold text-white">{currentParticipant.referral_count}</span> verified referrals and{' '}
                            <span className="font-semibold text-white">{currentParticipant.share_count}</span> logged shares. Keep going!
                        </p>
                    ) : (
                        <p>
                            <Link href="/" className="text-emerald-300 hover:text-emerald-200">
                                Opt in now
                            </Link>{' '}
                            to generate your personal referral link and start climbing the leaderboard.
                        </p>
                    )}
                </div>
            </div>
        </div>
    );
}
