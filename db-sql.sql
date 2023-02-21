--
-- Database: `db_contact`
--

CREATE DATABASE IF NOT EXISTS `db_contact` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_contact`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

DROP TABLE IF EXISTS `tbl_contact`;
CREATE TABLE `tbl_contact` (
  `id` int(30) NOT NULL,
  `email_phone` text() NOT NULL,
  `password` varchar(50) NOT NULL, 
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;
