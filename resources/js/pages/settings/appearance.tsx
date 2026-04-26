import { Head } from '@inertiajs/react';
import AppearanceTabs from '@/components/appearance-tabs';
import Heading from '@/components/heading';
import { edit as editAppearance } from '@/routes/appearance';

export default function Appearance() {
    return (
        <>
            <Head title="Parametres d'apparence" />

            <h1 className="sr-only">Parametres d'apparence</h1>

            <div className="space-y-6">
                <Heading
                    variant="small"
                    title="Parametres d'apparence"
                    description="Mettez a jour les parametres d'apparence de votre compte"
                />
                <AppearanceTabs />
            </div>
        </>
    );
}

Appearance.layout = {
    breadcrumbs: [
        {
            title: "Parametres d'apparence",
            href: editAppearance(),
        },
    ],
};
