-- drop database db24z19;
create database if not exists db24z19;

use db24z19;

-- create table if not exists categories (
--     id bigint auto_increment not null,
--     name varchar(150) unique,
--     slug varchar(150) unique,
--     created_at datetime,
--     updated_at datetime,
--     primary key (id)
-- );

-- create table if not exists tags (
--     id bigint auto_increment not null,
--     name varchar(150) unique,
--     slug varchar(150) unique,
--     created_at datetime,
--     updated_at datetime,
--     primary key (id)
-- );

select * from users;

select * from categories;

select * from posts;

select * from tags;

select * from post_tag;