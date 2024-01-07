# sample-library-oop


## システム要件

* ユーザーは図書館の会員と司書の二種類
* ユーザーは電子メールアドレスとパスワードでシステムにログインする
* 会員は本を借りることができる
* 会員と司書はタイトルまたは著者名で本を検索できる
* 司書は会員をブロックまたはブロック解除できる（本の返却が遅れている場合など）
* 同じ本が何冊か所蔵されていることがある
* 本は図書館に物理的に所蔵されている

## 図書館システムの主要なクラス

* Library：システム設計の中心部
* Book：本
* BookItem:同じ本が何冊か所蔵されている場合、それぞれの蔵書はBookItemとみなされる
* BookLending：本が貸し出されると、BookLendingオブジェクトが作成される
* Member:図書館の会員
* Librarian:図書館の司書
* User:LibrarianとMemberの基底クラス
* Catalog:所蔵本のリスト
* Author：本の著者


## Development




```bash
docker run --rm -it -v $(pwd):/usr/src smeghead7/php-class-diagram:latest bash
```
