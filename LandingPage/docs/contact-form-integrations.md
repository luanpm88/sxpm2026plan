# Contact Form Integrations

This project supports:
- Google Sheets via Apps Script Web App
- Telegram notifications via Bot API

## 1) Google Sheets setup

Target sheet:
`https://docs.google.com/spreadsheets/d/1PQevZUBZD0Oqeb0yR1pIfX-PeLIiMLuRh5yKlhT6ENA/edit?gid=0#gid=0`

### Apps Script
1. Open the sheet.
2. Go to `Extensions` -> `Apps Script`.
3. Replace script content with:

```javascript
const SHEET_NAME = 'Sheet1'; // change if needed

function doPost(e) {
  try {
    const body = JSON.parse(e.postData.contents || '{}');
    const sheet = SpreadsheetApp.getActiveSpreadsheet().getSheetByName(SHEET_NAME);

    if (!sheet) {
      return ContentService
        .createTextOutput(JSON.stringify({ ok: false, error: 'Sheet not found' }))
        .setMimeType(ContentService.MimeType.JSON);
    }

    sheet.appendRow([
      new Date(),
      body.locale || '',
      body.name || '',
      body.email || '',
      body.phone || '',
      body.company || '',
      body.project_type || '',
      body.budget || '',
      body.message || '',
      body.page_url || '',
      body.ip || '',
      body.user_agent || ''
    ]);

    return ContentService
      .createTextOutput(JSON.stringify({ ok: true }))
      .setMimeType(ContentService.MimeType.JSON);
  } catch (err) {
    return ContentService
      .createTextOutput(JSON.stringify({ ok: false, error: String(err) }))
      .setMimeType(ContentService.MimeType.JSON);
  }
}
```

4. Click `Deploy` -> `New deployment`.
5. Type: `Web app`.
6. Execute as: `Me`.
7. Who has access: `Anyone`.
8. Deploy, then copy the Web App URL.

### Laravel env
Set in `.env`:

```env
GOOGLE_SHEETS_WEBHOOK_URL=https://script.google.com/macros/s/xxxx/exec
```

## 2) Telegram setup

1. Open Telegram and find `@BotFather`.
2. Run `/newbot` and create bot.
3. Copy the bot token.
4. Send a message to your bot once.
5. Get `chat_id` from:
   `https://api.telegram.org/bot<YOUR_BOT_TOKEN>/getUpdates`
6. Put values into `.env`:

```env
TELEGRAM_BOT_TOKEN=123456:ABC...
TELEGRAM_CHAT_ID=123456789
```

## 3) Clear config cache

```bash
php artisan optimize:clear
```

## 4) Expected behavior

On submit:
- validated form data is posted to Google Sheets (if configured)
- Telegram message is sent (if configured)
- success message is shown if at least one destination succeeds
