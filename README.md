# bm-lp-final-2209

**Landing page (final-year project)** — static + PHP contact form. Polished repo prepared for a fresh single commit.

## Detected tech & structure

- Languages: **PHP**, **HTML**, **CSS**, **JavaScript**
- Styling: **Tailwind CSS** (pre-built CSS in `css/output.css`, `tailwind.config.js`, PostCSS config present)
- Frontend behavior: **Alpine.js** (loaded from CDN)
- Node tools: `tailwindcss`, `postcss`, `autoprefixer` listed in `package.json` (used to build CSS)
- Mail: `send_mail.php` (uses **PEAR Mail** via `require_once "Mail.php"` with placeholder SMTP config)  
- PHPMailer library included under `PHPMailer/` (optional to use instead of PEAR Mail)
- Lots of icon/assets under `node_modules` (Bootstrap icons included)

## Quick security notes (please read BEFORE publishing)
- **Remove `info.php`** (contains `phpinfo()` which leaks server details) or do not expose it publicly.
- No hardcoded production secrets found, but **SMTP credentials are placeholders** in `send_mail.php`; do **not** commit real credentials.
- The archive included a `.git` directory and `node_modules/`. We will remove those for a clean public repo.
- `PHPMailer` source is included — it's licensed under **LGPL**; keep its files intact and include attribution if you re-license your project.

## What I generated (paste/copy into your project before creating the fresh git commit)
- `.gitignore` (Node + PHP + editor ignores)
- `LICENSE` (MIT recommended for your code)
- `SECURITY.md` (how to report vulnerabilities / keep secrets out)
- `CONTRIBUTING.md` and `CODE_OF_CONDUCT.md` (short templates)
- `.env.example` (example environment variables for SMTP)
- `send_mail_phpmailer.php` (safer contact form using PHPMailer + env vars — drop-in replacement)
- `.github/workflows/ci.yml` (simple CI: PHP lint + build CSS)
- `GIT_INSTRUCTIONS.txt` (exact commands for Option B — fresh single commit)

## Next steps I recommend (one-time)
1. Move the project folder to a clean location (or delete `.git` and `node_modules/`).
2. Replace `send_mail.php` with `send_mail_phpmailer.php` (or configure your server to provide PEAR Mail).
3. Create a `.env` file on your server (never commit `.env`). Use `.env.example` for documentation.
4. Initialize a new git repo and push (I included exact commands below in `GIT_INSTRUCTIONS.txt`).

---

If you want, I can now:
- (A) write these files into a ready-to-download archive for you to copy into the project (recommended), **or**
- (B) just paste the file contents here so you can copy them yourself.

I already prepared them; tell me which you prefer and I will produce the archive and the *exact* next-step commands to run locally.
