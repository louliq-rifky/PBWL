CREATE TABLE tb_tiket (
    tiket_id TINYINT(3) NOT NULL AUTO_INCREMENT,
    tiket_name VARCHAR(100),
    PRIMARY KEY (tiket_id)
);

CREATE TABLE tb_pengunjung (
    pengunjung_id INT(11) NOT NULL AUTO_INCREMENT,
    pengunjung_name VARCHAR(100),
    pengunjung_id_tiket TINYINT(3) NOT NULL,
    PRIMARY KEY (pengunjung_id),
    FOREIGN KEY (pengunjung_id_tiket) REFERENCES tb_tiket(tiket_id)
);

CREATE TABLE tb_harga (
    buyyer_id INT(11) NOT NULL AUTO_INCREMENT,
    buyyer_name VARCHAR(100),
    buy_date TIMESTAMP,
    harga VARCHAR(100),
    PRIMARY KEY (buyyer_id),
    FOREIGN KEY (buyyer_id) REFERENCES tb_pengunjung(pengunjung_id)
);