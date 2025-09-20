import { Head, useForm } from '@inertiajs/react';
import { useEffect, useRef } from 'react';

export default function VerifyOptIn({ participant }) {
    const inputRef = useRef(null);
    const form = useForm({ code: '' });

    useEffect(() => {
        inputRef.current?.focus();
    }, []);

    const submit = (event) => {
        event.preventDefault();
        form.post('/verify');
    };

    return (
        <div className="min-h-screen bg-slate-950">
            <Head title="Enter confirmation code" />
            <div className="mx-auto flex min-h-screen max-w-3xl flex-col items-center justify-center px-6 py-16">
                <div className="w-full rounded-3xl border border-white/10 bg-slate-900/80 p-10 shadow-2xl backdrop-blur">
                    <h1 className="text-3xl font-semibold text-white">Confirm your opt-in</h1>
                    <p className="mt-3 text-sm text-slate-300">
                        We just sent a six digit code to your {participant.contact_method}. Enter it below to unlock the leaderboard and your referral link.
                    </p>

                    <form className="mt-8 space-y-6" onSubmit={submit}>
                        <div>
                            <label htmlFor="code" className="block text-sm font-medium text-slate-200">
                                Confirmation code
                            </label>
                            <input
                                id="code"
                                name="code"
                                ref={inputRef}
                                inputMode="numeric"
                                pattern="[0-9]{6}"
                                maxLength={6}
                                className="mt-2 w-full rounded-xl border border-white/10 bg-slate-950/60 px-4 py-3 text-center text-2xl tracking-[0.5em] text-white focus:border-emerald-400 focus:outline-none focus:ring-2 focus:ring-emerald-400/40"
                                value={form.data.code}
                                onChange={(event) => form.setData('code', event.target.value.replace(/[^0-9]/g, '').slice(0, 6))}
                                placeholder="123456"
                                required
                            />
                            {form.errors.code && <p className="mt-2 text-sm text-rose-400">{form.errors.code}</p>}
                        </div>

                        <button
                            type="submit"
                            disabled={form.processing}
                            className="w-full rounded-xl bg-emerald-400 px-4 py-3 text-sm font-semibold text-emerald-950 transition hover:bg-emerald-300 disabled:cursor-not-allowed disabled:opacity-60"
                        >
                            {form.processing ? 'Verifying…' : 'Verify and continue'}
                        </button>
                    </form>

                    <p className="mt-8 text-xs text-slate-500">
                        Code sent to <span className="font-mono text-slate-300">{participant.contact_identifier}</span>
                    </p>
                </div>
            </div>
        </div>
    );
}
