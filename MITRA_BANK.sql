
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sno` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

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
(1, 'Suratna Ghosh', 'sghosh@gmail.com', 80000),
(2, 'Sujit Mitra', 'smitra@gmail.com', 70000),
(3, 'Asoke Sengupta', 'asengupta@gmail.com', 70000),
(4, 'Sutapa Sengupta', 'ssengupta@gmail.com', 50000),
(5, 'Debosuta Ghosh', 'dghosh@gmail.com', 40000),
(6, 'Harshita Chaddha', 'hchaddha@gmail.com', 30000),
(7, 'Ramsha Hussain', 'rhussain@gmail.com', 50000),
(8, 'Shree Nidhi', 'snidhi@gmail.com', 40000),
(9, 'Tamoghna Ghosh', 'tghosh@gmail.com', 80000),
(10, 'Ankit Thakur', 'athakur@gmail.com', 100000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
COMMIT;

