# Security

If you discover a security vulnerability in this project, please report it privately to the repository owner.

**Before publishing / pushing to GitHub**
- Remove files that leak environment/server info (e.g., `info.php`).
- Do **not** commit real credentials. Use environment variables or a secret manager.
- Add `.env` to `.gitignore`.

**Local development**
- Put credentials in a `.env` file (not committed) or configure them in your server environment.

