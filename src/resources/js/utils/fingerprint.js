const STORAGE_KEY = 'viralapp:fingerprint';

async function digest(message) {
    const encoder = new TextEncoder();
    const data = encoder.encode(message);

    const buffer = await crypto.subtle.digest('SHA-256', data);
    return Array.from(new Uint8Array(buffer))
        .map((b) => b.toString(16).padStart(2, '0'))
        .join('');
}

export async function getFingerprint() {
    if (typeof window === 'undefined') {
        return '';
    }

    const existing = window.localStorage.getItem(STORAGE_KEY);
    if (existing) {
        return existing;
    }

    const parts = [
        navigator.userAgent,
        navigator.language,
        navigator.platform,
        navigator.hardwareConcurrency,
        navigator.deviceMemory,
        screen.width,
        screen.height,
        screen.colorDepth,
        Intl.DateTimeFormat().resolvedOptions().timeZone,
        Array.from(navigator.plugins || [])
            .map((plugin) => `${plugin.name}:${plugin.version}`)
            .join('|'),
    ];

    try {
        const hash = await digest(parts.join('::'));
        window.localStorage.setItem(STORAGE_KEY, hash);
        return hash;
    } catch (error) {
        console.error('Failed to build fingerprint', error);
        const fallback = parts.join('-');
        window.localStorage.setItem(STORAGE_KEY, fallback);
        return fallback;
    }
}
