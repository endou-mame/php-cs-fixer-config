# CHANGELOG

## 8.5

### Changed

- PHP の最小バージョン要件を `^8.4` から `^8.5` に更新
- マイグレーションルールセットを PHP 8.5 / PHPUnit 11.0 対応の新命名規則に移行

| 対象 | 変更前 | 変更後 |
|---|---|---|
| 非riskyルール | `@PHP84Migration` | `@PHP8x5Migration` |
| riskyルール | `@PHP80Migration:risky` | `@PHP8x5Migration:risky` |
| PHPUnit riskyルール | `@PHPUnit84Migration:risky` | `@PHPUnit11x0Migration:risky` |

> **Note:** PHP-CS-Fixer の旧命名規則（`@PHP85Migration` 等）は deprecated です。新しい `@PHP8xN` 形式を採用しています。
