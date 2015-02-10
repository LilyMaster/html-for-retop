-- 
-- Editor SQL for DB table tbl_prisijungimai
-- Created by http://editor.datatables.net/generator
-- 

CREATE TABLE `tbl_prisijungimai` (
	`id` int(10) NOT NULL auto_increment,
	`userid` varchar(255),
	`email` varchar(255),
	,
	`telno` varchar(255),
	,
	`sch_start` varchar(255),
	`sch_stop` varchar(255),
	`pastabos` text,
	PRIMARY KEY( `id` )
);