## Analysis notes

Findings:
- No authentication code detected (no JWT, OAuth, sessions).
- `send_mail.php` uses PEAR Mail (`require_once "Mail.php"`) but PEAR Mail is not included; PHPMailer is included instead. I recommend switching to PHPMailer or installing PEAR Mail on your server.
- `info.php` contains `phpinfo()` — remove before publishing.
- No credentials or API keys detected in the codebase provided.
- Lots of `node_modules/` and `.git/` history shipped in the zip — remove before fresh commit (we provide instructions).

Recommendations:
- Use `.env` for SMTP config and `.gitignore` to prevent accidental commits.
- Consider moving to PHPMailer-based handler included as `send_mail_phpmailer.php`.
