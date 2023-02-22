-- a
SELECT * FROM `baiviet` WHERE ma_tloai = 2

-- b
SELECT *
FROM baiviet
JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia
WHERE ten_tgia = 'Nhacvietplus';

-- g
SELECT * FROM `baiviet` WHERE ten_bhat LIKE '%yêu%' OR ten_bhat LIKE '%thương%' OR ten_bhat LIKE '%anh%' OR ten_bhat LIKE '%em%' LIMIT 1;
-- c
SELECT * FROM theloai WHERE ma_tloai NOT IN(SELECT ma_tloai FROM baiviet WHERE ma_tloai IS NOT NULL);

-- d
SELECT baiviet.ma_bviet, baiviet.tieude, baiviet.ten_bhat, tacgia.ten_tgia, theloai.ten_tloai, baiviet.ngayviet 
FROM baiviet 
JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai;

-- e
SELECT theloai.ten_tloai, COUNT(*) AS so_bviet
FROM baiviet
JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai
GROUP BY baiviet.ma_tloai
ORDER BY so_bviet DESC
LIMIT 1;

-- f
SELECT tacgia.ten_tgia, COUNT(*) AS so_bviet
FROM baiviet
JOIN tacgia ON tacgia.ma_tgia = baiviet.ma_tgia
GROUP BY baiviet.ma_tgia
ORDER BY so_bviet DESC
LIMIT 2;
--h
SELECT * FROM `baiviet` WHERE ten_bhat LIKE '%yêu%' OR ten_bhat LIKE '%thương%' OR ten_bhat LIKE '%anh%' OR ten_bhat LIKE '%em%' LIMIT 1;