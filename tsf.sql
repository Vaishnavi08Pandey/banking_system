CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Anmol', 'anmol@gmail.com', 75000),
(2, 'Muskan', 'muski@gmail.com', 55000),
(3, 'Bhawna', 'bhawna@gmail.com', 50000),
(4, 'Vaishnavi', 'vishi@gmail.com', 45000),
(5, 'Om', 'om@gmail.com', 50000),
(6, 'Sakshi', 'sakshi@gmail.com', 50000),
(7, 'Arjit', 'arjit@gmail.com', 50000),
(8, 'Ayush', 'ayush@gmail.com', 40000),
(9, 'Mansi', 'mansi@gmail.com', 40000),
(10,'Mahi', 'mahi@gmail.com', 40000);


CREATE TABLE `transaction` (
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
