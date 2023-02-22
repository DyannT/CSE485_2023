-- a
SELECT * FROM `baiviet` WHERE ma_tloai = 2

-- b
SELECT * FROM `baiviet` WHERE ma_tgia = 1

-- g
SELECT * FROM `baiviet` WHERE ten_bhat LIKE '%yêu%' OR ten_bhat LIKE '%thương%' OR ten_bhat LIKE '%anh%' OR ten_bhat LIKE '%em%' LIMIT 1;

--h
SELECT * FROM `baiviet` WHERE ten_bhat LIKE '%yêu%' OR ten_bhat LIKE '%thương%' OR ten_bhat LIKE '%anh%' OR ten_bhat LIKE '%em%' LIMIT 1;