import { Head, Link, useForm, usePage } from '@inertiajs/react';
import { useEffect, useMemo, useState } from 'react';
import { getFingerprint } from '../utils/fingerprint';
import clsx from 'clsx';

const CONTACT_METHODS = [
    { key: 'whatsapp', label: 'WhatsApp number' },
    { key: 'telegram', label: 'Telegram handle' },
];

export default function Landing({ customization, referrer, share, preselectedReferral }) {
    const { flash } = usePage().props;
    const [fingerprint, setFingerprint] = useState('');
    const form = useForm({
        display_name: '',
        country: '',
        contact_method: 'whatsapp',
        contact_identifier: '',
        referral_code: preselectedReferral ?? '',
        fingerprint: '',
    });

    useEffect(() => {
        getFingerprint().then((value) => {
            setFingerprint(value);
            form.setData('fingerprint', value);
        });
    }, []);

    const hero = customization?.hero ?? {};
    const features = customization?.features ?? [];

    const contactLabel = useMemo(() => {
        return CONTACT_METHODS.find((method) => method.key === form.data.contact_method)?.label ?? 'Contact';
    }, [form.data.contact_method]);

    const submit = async (event) => {
        event.preventDefault();
        if (!form.data.fingerprint && fingerprint) {
            form.setData('fingerprint', fingerprint);
        }

        form.post('/opt-in');
    };

    return (
        <div className="min-h-screen bg-slate-950">
            <Head title="Join the viral challenge" />
            <div className="relative overflow-hidden">
                <div
                    className={clsx(
                        'absolute inset-0 opacity-60 blur-3xl transition-all duration-500',
                        hero.background === 'gradient'
                            ? 'bg-gradient-to-br from-emerald-400 via-cyan-500 to-indigo-500'
                            : 'bg-emerald-500'
                    )}
                />
                <div className="relative mx-auto flex w-full max-w-6xl flex-col gap-16 px-6 py-16 lg:flex-row lg:items-start">
                    <section className="flex-1 rounded-3xl border border-white/10 bg-white/5 p-8 backdrop-blur">
                        <p className="mb-4 inline-flex items-center gap-2 rounded-full bg-emerald-500/10 px-4 py-1 text-sm font-semibold text-emerald-300">
                            Viral referral engine
                        </p>
                        <h1 className="text-4xl font-bold tracking-tight text-white sm:text-5xl">
                            {hero.title}
                        </h1>
                        <p className="mt-4 text-lg text-slate-200">{hero.subtitle}</p>

                        {referrer && (
                            <div className="mt-6 rounded-2xl border border-emerald-400/30 bg-emerald-400/10 p-4 text-sm text-emerald-100">
                                <p className="font-semibold">You were invited!</p>
                                <p>
                                    {referrer.display_name ?? 'A top referrer'} from {referrer.country} shared their unique link with you.
                                </p>
                            </div>
                        )}

                        <div className="mt-10 grid gap-6 md:grid-cols-2">
                            {features.map((feature, index) => (
                                <div key={index} className="rounded-2xl border border-white/10 bg-white/5 p-6">
                                    <h3 className="text-lg font-semibold text-white">{feature.title}</h3>
                                    <p className="mt-2 text-sm text-slate-200">{feature.description}</p>
                                </div>
                            ))}
                        </div>
                    </section>

                    <section className="w-full max-w-md rounded-3xl border border-white/10 bg-slate-900/80 p-8 shadow-2xl backdrop-blur">
                        <h2 className="text-2xl font-semibold text-white">Get your referral link</h2>
                        <p className="mt-2 text-sm text-slate-300">
                            Confirm your opt-in, receive a code on WhatsApp or Telegram, and unlock your personalised leaderboard link.
                        </p>
                        <form className="mt-6 space-y-5" onSubmit={submit}>
                            <div>
                                <label htmlFor="display_name" className="block text-sm font-medium text-slate-200">
                                    Display name (optional)
                                </label>
                                <input
                                    id="display_name"
                                    type="text"
                                    className="mt-2 w-full rounded-xl border border-white/10 bg-slate-950/60 px-4 py-3 text-white placeholder:text-slate-500 focus:border-emerald-400 focus:outline-none focus:ring-2 focus:ring-emerald-400/40"
                                    value={form.data.display_name}
                                    onChange={(event) => form.setData('display_name', event.target.value)}
                                    placeholder="Your name or brand"
                                />
                            </div>

                            <div>
                                <label htmlFor="country" className="block text-sm font-medium text-slate-200">
                                    Country
                                </label>
                                <input
                                    id="country"
                                    required
                                    className="mt-2 w-full rounded-xl border border-white/10 bg-slate-950/60 px-4 py-3 text-white placeholder:text-slate-500 focus:border-emerald-400 focus:outline-none focus:ring-2 focus:ring-emerald-400/40"
                                    value={form.data.country}
                                    onChange={(event) => form.setData('country', event.target.value)}
                                    placeholder="Where are you joining from?"
                                />
                                {form.errors.country && <p className="mt-1 text-sm text-rose-400">{form.errors.country}</p>}
                            </div>

                            <fieldset>
                                <legend className="block text-sm font-medium text-slate-200">Preferred channel</legend>
                                <div className="mt-2 flex gap-2">
                                    {CONTACT_METHODS.map((method) => (
                                        <button
                                            key={method.key}
                                            type="button"
                                            onClick={() => form.setData('contact_method', method.key)}
                                            className={clsx(
                                                'flex-1 rounded-xl border px-4 py-2 text-sm font-medium transition',
                                                form.data.contact_method === method.key
                                                    ? 'border-emerald-400 bg-emerald-400/20 text-emerald-100'
                                                    : 'border-white/10 bg-slate-950/60 text-slate-300 hover:border-white/20'
                                            )}
                                        >
                                            {method.label.split(' ')[0]}
                                        </button>
                                    ))}
                                </div>
                            </fieldset>

                            <div>
                                <label htmlFor="contact_identifier" className="block text-sm font-medium text-slate-200">
                                    {contactLabel}
                                </label>
                                <input
                                    id="contact_identifier"
                                    required
                                    className="mt-2 w-full rounded-xl border border-white/10 bg-slate-950/60 px-4 py-3 text-white placeholder:text-slate-500 focus:border-emerald-400 focus:outline-none focus:ring-2 focus:ring-emerald-400/40"
                                    value={form.data.contact_identifier}
                                    onChange={(event) => form.setData('contact_identifier', event.target.value)}
                                    placeholder={form.data.contact_method === 'whatsapp' ? '+1 555 123 4567' : '@yourhandle'}
                                />
                                {form.errors.contact_identifier && (
                                    <p className="mt-1 text-sm text-rose-400">{form.errors.contact_identifier}</p>
                                )}
                            </div>

                            <div>
                                <label htmlFor="referral_code" className="block text-sm font-medium text-slate-200">
                                    Referral code (optional)
                                </label>
                                <input
                                    id="referral_code"
                                    className="mt-2 w-full rounded-xl border border-white/10 bg-slate-950/60 px-4 py-3 text-white placeholder:text-slate-500 focus:border-emerald-400 focus:outline-none focus:ring-2 focus:ring-emerald-400/40"
                                    value={form.data.referral_code}
                                    onChange={(event) => form.setData('referral_code', event.target.value)}
                                    placeholder="Enter a friend's code"
                                />
                            </div>

                            <input type="hidden" name="fingerprint" value={fingerprint} />

                            <button
                                type="submit"
                                disabled={form.processing}
                                className="flex w-full items-center justify-center gap-2 rounded-xl bg-emerald-400 px-4 py-3 text-sm font-semibold text-emerald-950 transition hover:bg-emerald-300 disabled:cursor-not-allowed disabled:opacity-60"
                            >
                                {form.processing ? 'Sending code…' : 'Send me the confirmation code'}
                            </button>
                        </form>

                        {flash?.message && (
                            <p className="mt-4 text-sm text-emerald-200">{flash.message}</p>
                        )}

                        <p className="mt-8 text-xs text-slate-500">{share?.legal_footer}</p>
                    </section>
                </div>
            </div>

            <footer className="border-t border-white/5 bg-slate-950/80 py-6 text-center text-xs text-slate-500">
                <div className="mx-auto flex max-w-4xl flex-col items-center justify-between gap-3 px-6 sm:flex-row">
                    <span>© {new Date().getFullYear()} {customization?.brand ?? 'Viral Referral Engine'}</span>
                    <div className="flex items-center gap-4">
                        <Link href="/leaderboard" className="text-emerald-300 hover:text-emerald-200">
                            View leaderboard
                        </Link>
                        {share?.terms && (
                            <a href={share.terms} className="hover:text-slate-300" target="_blank" rel="noreferrer">
                                Terms
                            </a>
                        )}
                    </div>
                </div>
            </footer>
        </div>
    );
}
