# Front-end Developer Test

---------------------

Anda akan membuat sebuah protoype halaman berita lengkap dengan menggunakan HTML, CSS dan Javascript. Halaman yang akan dibuat adalah sebuah web responsive dengan minimum browser requirement adalah Internet Explorer 9. Tampilan responsive sudah disediakan.

## Navigasi

Di tampilan mobile, navigasi menggunakan hamburger menu. Interaksi dan animasi pada saat user click hamburger menu dapat dilihat di `navigasi.mp4`. Di tampilan desktop, navigasi tidak lagi menggunakan hamburger menu (home.jpg).

## Reading Mode

Secara default user akan disuguh dengan **Day Mode** di mana memiliki background putih. Apabila user mengaktifkan **Night Mode** dengan click button *Day Mode* di bawah judul, background web page akan otomatis berubah menjadi lebih gelap dengan warna teks adalah putih. Contoh design dapat dilihat di `home.jpg` dan `home-dark.jpg`.

## Comment

User harus mengisi 3 field untuk memberikan komentar. Di bagian ini harus melakukan validasi semua field tidak boleh kosong.

Apabila terdapat field yang kosong, pada saat user click button *Submit*, border color field yang kosong berubah menjadi warna merah disertai dengan pesan "Field may not empty" (form-validation.jpg).

Untuk field yang telah terisi, pada saat user click button *Submit*, border color field yang tidak kosong berubah menjadi warna biru tanpa disertai pesan (form-validation-success.png).

Apabila semua field terisi, munculkan pesan alert dengan text "Thank you very much".

Apabila user click button *Reset*, semua field kembali kosong dan fokus ke field **Name**.

## Comment list

Data komentar di-load menggunakan Ajax dan di-populate dari file `comments.json`. 

---------------------

### Acceptance criteria

* Menggunakan Semantic Markup.
* *Prototype* HTML *responsive* menggunakan pendekatan **Mobile First** dan memiliki 3 *breakpoints*:
    * *Mobile*: 0 - 639px dengan base `font-size` 14px
    * *Tablet*: 640px - 1023px dengan base `font-size` 16px
    * *Desktop*: > 1024px dengan base `font-size` 18px
* Semua aset baik CSS dan JS tidak boleh di *minify*. Begitu juga dengan *plugin* Javascript/jQuery yang digunakan tidak boleh menggunakan *minified version*.
* Tidak diperbolehkan menggunakan *Front-end framework* seperti **Bootstrap**, **Zurb**, **Pure** atau sejenisnya.
* Hasil *prototype* HTML sama atau mendekati contoh design yang diberikan baik untuk tampilan *mobile* dan *desktop*.
* Fungsionalitas fitur-fitur berjalan sebagaimana mestinya.
* Apabila menggunakan *CSS Preprocessor*, *source files* yang juga harus disertakan.
* *Style* untuk `hover`, `focus` dan `active` state diserahkan ke developer untuk berkreasi.

Poin tambahan jika:
* Menggunakan CSS Preprocessor seperti SCSS atau Less.
* Mengaplikasikan salah satu CSS architectures seperti OOCSS atau SMACSS
* Mengaplikasikan salah satu design pattern Javascript.

## Delivery test

Test yang sudah selesai ditaruh ke Git repository seperti Github atau Bitbucket. Lalu kirimkan link repository tersebut via email agar bisa dinilai.

Sumber: http://edukasi.kompas.com/read/2016/10/08/15534081/tidak.ada.anak.bodoh.dia.akan.berprestasi.jika.punya.motivasi.untuk.jadi.hebat
