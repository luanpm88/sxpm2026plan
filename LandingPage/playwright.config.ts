import { defineConfig, devices } from '@playwright/test';

export default defineConfig({
    testDir: './tests/e2e',
    timeout: 15_000,
    retries: 0,
    reporter: [['list'], ['html', { open: 'never' }]],

    use: {
        baseURL: 'http://localhost:8787',
        // Clear cookies between tests so locale detection is fresh
        storageState: undefined,
    },

    projects: [
        {
            name: 'chromium',
            use: { ...devices['Desktop Chrome'] },
        },
    ],

    // Laravel dev server must already be running (composer run dev or php artisan serve --port=8787)
    // If you want Playwright to start it automatically, uncomment:
    // webServer: {
    //     command: 'php artisan serve --port=8787',
    //     port: 8787,
    //     reuseExistingServer: true,
    // },
});
