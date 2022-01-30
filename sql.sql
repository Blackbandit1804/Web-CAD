
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(207) NOT NULL,
  `password` varchar(207) NOT NULL,
  `PDnr` int(11) NOT NULL,
  `rank` varchar(207) NOT NULL,
  `role` varchar(207) NOT NULL DEFAULT 'User'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;
