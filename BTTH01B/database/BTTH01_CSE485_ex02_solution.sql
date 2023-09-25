--a
SELECT * FROM baiviet
INNER JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai
WHERE theloai.ten_tloai = 'Nh?c tr? tình';

--b
SELECT * FROM baiviet
INNER JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia
WHERE tacgia.ten_tgia = 'Nhacvietplus';

--c
SELECT * FROM theloai
INNER JOIN baiviet ON theloai.ma_tloai = baiviet.ma_tloai
WHERE baiviet.noidung IS NULL;

--d
SELECT baiviet.ma_bviet, baiviet.tieude, baiviet.ten_bhat, tacgia.ten_tgia, theloai.ten_tloai, baiviet.ngayviet FROM baiviet
INNER JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia 
INNER JOIN theloai ON theloai.ma_tloai = baiviet.ma_tloai;

--e
SELECT theloai.ten_tloai, COUNT(baiviet.ma_bviet) AS SL_baiviet
FROM theloai 
INNER JOIN baiviet ON theloai.ma_tloai = baiviet.ma_tloai
GROUP BY theloai.ma_tloai
ORDER BY SL_baiviet DESC LIMIT 1;

--f
SELECT tacgia.ten_tgia, COUNT(baiviet.ma_bviet) AS SL_baiviet
FROM tacgia
INNER JOIN baiviet ON tacgia.ma_tgia = baiviet.ma_tgia
GROUP BY tacgia.ma_tgia
ORDER BY SL_baiviet DESC LIMIT 2;

--g
SELECT baiviet.tieude, baiviet.ten_bhat 
FROM baiviet 
WHERE ten_bhat LIKE '%Yeu%' 
OR ten_bhat LIKE '%Thuong%' 
OR ten_bhat LIKE '%Anh%' 
OR ten_bhat LIKE '%Em%';

--h
SELECT baiviet.tieude, baiviet.ten_bhat 
FROM baiviet 
WHERE tieude LIKE '%Yeu%' OR tieude LIKE '%Thuong%' 
OR tieude LIKE '%Anh%' OR tieude LIKE '%Em%' 
OR ten_bhat LIKE '%Yeu%' OR ten_bhat LIKE '%Thuong%' 
OR ten_bhat LIKE '%Anh%' OR ten_bhat LIKE '%Em%';
