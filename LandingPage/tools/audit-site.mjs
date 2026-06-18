// Full visual audit helper for HKIncotech landing.
// Usage: node tools/audit-site.mjs <tag>
// Outputs screenshots under /tmp/hkshots/<tag>/{light,dark,mobile}.
import { chromium } from 'playwright';
import fs from 'fs';

const tag = process.argv[2] || 'audit';
const base = process.env.BASE_URL || 'http://localhost:8788';
const outRoot = `/tmp/hkshots/${tag}`;

const pages = [
  ['home', '/'],
  ['services', '/services'],
  ['sme-manufacturing', '/solutions/sme-manufacturing'],
  ['scrum', '/scrum'],
  ['tech-stack', '/tech-stack'],
  ['certifications', '/certifications'],
  ['case-studies', '/case-studies'],
  ['about', '/about-us'],
  ['pricing', '/pricing'],
  ['contact', '/contact'],
];

const modes = [
  { name: 'light', viewport: { width: 1440, height: 1000 }, theme: 'light', fullPage: true },
  { name: 'dark', viewport: { width: 1440, height: 1000 }, theme: 'dark', fullPage: true },
  { name: 'mobile', viewport: { width: 390, height: 900 }, theme: 'light', fullPage: true },
];

fs.mkdirSync(outRoot, { recursive: true });

const browser = await chromium.launch();

for (const mode of modes) {
  const modeDir = `${outRoot}/${mode.name}`;
  fs.mkdirSync(modeDir, { recursive: true });

  const context = await browser.newContext({
    viewport: mode.viewport,
    deviceScaleFactor: mode.name === 'mobile' ? 2 : 1,
  });
  await context.addInitScript((theme) => {
    try {
      localStorage.setItem('theme', theme);
    } catch (_) {}
    document.documentElement.setAttribute('data-theme', theme);
  }, mode.theme);

  const page = await context.newPage();

  for (const locale of ['vi', 'en']) {
    for (const [name, path] of pages) {
      const url = `${base}/${locale}${path}`;
      const file = `${modeDir}/${locale}-${name}.png`;
      try {
        const response = await page.goto(url, { waitUntil: 'networkidle', timeout: 35000 });
        await page.evaluate((theme) => document.documentElement.setAttribute('data-theme', theme), mode.theme);
        await page.waitForTimeout(500);
        await page.screenshot({ path: file, fullPage: mode.fullPage });
        console.log(`${mode.name.padEnd(6)} ${locale}/${name.padEnd(18)} ${response ? response.status() : '?'} -> ${file}`);
      } catch (error) {
        console.log(`${mode.name.padEnd(6)} ${locale}/${name.padEnd(18)} FAILED: ${error.message.split('\n')[0]}`);
      }
    }
  }

  await context.close();
}

await browser.close();
console.log(`done: ${outRoot}`);
