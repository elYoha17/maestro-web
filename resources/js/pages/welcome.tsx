import { Head, Link, usePage } from '@inertiajs/react';
import { ArrowRight, CircleHelp, Mail } from 'lucide-react';
import AppLogoIcon from '@/components/app-logo-icon';
import { home, login, register } from '@/routes';

export default function Welcome({
    canRegister = true,
}: {
    canRegister?: boolean;
}) {
    const { auth } = usePage().props;

    return (
        <>
            <Head title="Bienvenue a Maestro" />
            <div className="min-h-screen bg-[linear-gradient(160deg,#fff7f5_0%,#fffdfa_45%,#fff_100%)] text-[#231815] dark:bg-[linear-gradient(160deg,#150d0b_0%,#0d0d0d_45%,#090909_100%)] dark:text-[#f7efeb]">
                <header className="mx-auto flex w-full max-w-6xl items-center justify-between px-6 py-6 lg:px-8">
                    <div className="flex items-center gap-3">
                        <div className="flex size-11 items-center justify-center rounded-2xl bg-[#f0542a]/10 text-[#f0542a] ring-1 ring-[#f0542a]/20 dark:bg-[#ff7a59]/10 dark:text-[#ff9a7f] dark:ring-[#ff9a7f]/20">
                            <AppLogoIcon className="size-6" />
                        </div>
                        <div>
                            <p className="text-xs font-medium uppercase tracking-[0.28em] text-[#9b5b49] dark:text-[#d89a88]">
                                Maestro
                            </p>
                            <h1 className="text-lg font-semibold">Acceuil</h1>
                        </div>
                    </div>

                    <nav className="flex items-center gap-3">
                        {auth.user ? (
                            <Link
                                href={home()}
                                className="inline-flex items-center gap-2 rounded-full bg-[#221714] px-5 py-2 text-sm font-medium text-white transition hover:bg-[#120b09] dark:bg-[#f7efeb] dark:text-[#1b110f] dark:hover:bg-white"
                            >
                                Aller a Acceuil
                                <ArrowRight className="size-4" />
                            </Link>
                        ) : (
                            <>
                                <Link
                                    href={login()}
                                    className="rounded-full px-4 py-2 text-sm font-medium text-[#5f433c] transition hover:bg-[#f5e7e1] dark:text-[#e8c8be] dark:hover:bg-white/8"
                                >
                                    Connexion
                                </Link>
                                {canRegister && (
                                    <Link
                                        href={register()}
                                        className="inline-flex items-center gap-2 rounded-full bg-[#221714] px-5 py-2 text-sm font-medium text-white transition hover:bg-[#120b09] dark:bg-[#f7efeb] dark:text-[#1b110f] dark:hover:bg-white"
                                    >
                                        Inscription
                                        <ArrowRight className="size-4" />
                                    </Link>
                                )}
                            </>
                        )}
                    </nav>
                </header>

                <main className="mx-auto grid w-full max-w-6xl gap-8 px-6 pb-10 pt-6 lg:grid-cols-[1.15fr_0.85fr] lg:px-8 lg:pb-16 lg:pt-14">
                    <section className="rounded-[2rem] border border-[#f3d8cf] bg-white/90 p-8 shadow-[0_24px_80px_-40px_rgba(194,80,42,0.45)] backdrop-blur dark:border-white/8 dark:bg-white/4 dark:shadow-[0_24px_80px_-40px_rgba(0,0,0,0.65)] lg:p-12">
                        <div className="mb-10 inline-flex items-center gap-2 rounded-full border border-[#f3d8cf] bg-[#fff7f4] px-4 py-1.5 text-sm text-[#9b5b49] dark:border-white/8 dark:bg-white/6 dark:text-[#e9c6ba]">
                            <AppLogoIcon className="size-4" />
                            Une base Laravel pensee pour Maestro
                        </div>

                        <div className="space-y-6">
                            <h2 className="max-w-2xl text-4xl font-semibold tracking-tight text-[#221714] dark:text-white lg:text-6xl">
                                Maestro remplace le starter kit avec une identite plus forte et plus claire.
                            </h2>
                            <p className="max-w-xl text-base leading-7 text-[#6f5047] dark:text-[#d3b5ab]">
                                L&apos;application conserve l&apos;architecture Laravel existante,
                                mais l&apos;entree principale se fait desormais par la route
                                d&apos;accueil et l&apos;experience visuelle reflete mieux Maestro.
                            </p>
                        </div>

                        <div className="mt-10 grid gap-4 sm:grid-cols-2">
                            <a
                                href="#"
                                className="group rounded-2xl border border-[#f0d4cb] bg-[#fffaf8] p-5 transition hover:border-[#f0542a]/40 hover:bg-white dark:border-white/8 dark:bg-white/4 dark:hover:border-[#ff9a7f]/30 dark:hover:bg-white/7"
                            >
                                <div className="mb-4 flex size-11 items-center justify-center rounded-2xl bg-[#f0542a]/10 text-[#f0542a] dark:bg-[#ff9a7f]/10 dark:text-[#ff9a7f]">
                                    <CircleHelp className="size-5" />
                                </div>
                                <p className="text-lg font-semibold">A propos</p>
                                <p className="mt-2 text-sm leading-6 text-[#6f5047] dark:text-[#d3b5ab]">
                                    Un espace de presentation pour raconter la vision Maestro.
                                </p>
                            </a>

                            <a
                                href="#"
                                className="group rounded-2xl border border-[#f0d4cb] bg-[#fffaf8] p-5 transition hover:border-[#f0542a]/40 hover:bg-white dark:border-white/8 dark:bg-white/4 dark:hover:border-[#ff9a7f]/30 dark:hover:bg-white/7"
                            >
                                <div className="mb-4 flex size-11 items-center justify-center rounded-2xl bg-[#f0542a]/10 text-[#f0542a] dark:bg-[#ff9a7f]/10 dark:text-[#ff9a7f]">
                                    <Mail className="size-5" />
                                </div>
                                <p className="text-lg font-semibold">Contacts</p>
                                <p className="mt-2 text-sm leading-6 text-[#6f5047] dark:text-[#d3b5ab]">
                                    Une entree prete pour afficher vos points de contact plus tard.
                                </p>
                            </a>
                        </div>
                    </section>

                    <aside className="relative overflow-hidden rounded-[2rem] border border-[#f3d8cf] bg-[#231815] p-8 text-white shadow-[0_24px_80px_-45px_rgba(35,24,21,0.7)] dark:border-white/8 dark:bg-[#140c0b] lg:p-10">
                        <div className="absolute -right-10 -top-10 size-40 rounded-full bg-[#f0542a]/20 blur-3xl" />
                        <div className="absolute -bottom-16 left-8 size-48 rounded-full bg-[#ffab8c]/15 blur-3xl" />

                        <div className="relative flex h-full flex-col justify-between gap-10">
                            <div className="space-y-5">
                                <div className="inline-flex size-16 items-center justify-center rounded-3xl bg-white/8 text-[#ff9a7f] ring-1 ring-white/10">
                                    <AppLogoIcon className="size-9" />
                                </div>
                                <div>
                                    <p className="text-sm uppercase tracking-[0.32em] text-[#ffb39d]">
                                        Identite
                                    </p>
                                    <h3 className="mt-3 text-3xl font-semibold">
                                        Un monogramme inspire de Laravel, reinterprete pour Maestro.
                                    </h3>
                                </div>
                            </div>

                            <div className="grid gap-4">
                                <div className="rounded-2xl border border-white/10 bg-white/6 p-5">
                                    <p className="text-sm text-[#ffd5c7]">Route principale</p>
                                    <p className="mt-1 text-xl font-semibold">/</p>
                                </div>
                                <div className="rounded-2xl border border-white/10 bg-white/6 p-5">
                                    <p className="text-sm text-[#ffd5c7]">Redirection apres login</p>
                                    <p className="mt-1 text-xl font-semibold">Acceuil</p>
                                </div>
                            </div>
                        </div>
                    </aside>
                </main>
            </div>
        </>
    );
}
