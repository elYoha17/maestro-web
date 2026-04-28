import type { SVGAttributes } from 'react';

export default function AppLogoIcon(props: SVGAttributes<SVGElement>) {
    return (
        <svg {...props} viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M11 20.5 32 8l21 12.5v23L32 56 11 43.5v-23Z"
                fill="currentColor"
                opacity="0.12"
            />
            <path
                d="M11 20.5 32 8l21 12.5v23L32 56 11 43.5v-23Z"
                fill="none"
                stroke="currentColor"
                strokeLinecap="round"
                strokeLinejoin="round"
                strokeWidth="4"
            />
            <path
                d="M21 42V24l11 11 11-11v18"
                fill="none"
                stroke="currentColor"
                strokeLinecap="round"
                strokeLinejoin="round"
                strokeWidth="4"
            />
            <path
                d="M21 24 32 30.5 43 24"
                fill="none"
                stroke="currentColor"
                strokeLinecap="round"
                strokeLinejoin="round"
                strokeWidth="4"
            />
        </svg>
    );
}
