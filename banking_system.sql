SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `banking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `mini_statement`
--

CREATE TABLE `mini_statement` (
  `sender` varchar(50) NOT NULL,
  `receiver` varchar(50) NOT NULL,
  `amount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mini_statement`
--

INSERT INTO `mini_statement` (`sender`, `receiver`, `amount`) VALUES
('sulai', 'hasee', 400),
('sano', 'sabi', 250),
('kalai', 'isai', 500),
('hasee', 'sumi', 400),
('sabi', 'sulai', 130),
('appu', 'jabu', 250);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `amount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `amount`) VALUES
('hasee', 'hasee@gmail.com', 5000),
('sumi', 'sumi@gmail.com', 3500),
('sulai', 'sulai@gmail.com', 1000),
('sano', 'sano@gmail.com', 950),
('sabi', 'sabi@gmail.com', 2000),
('kalai', 'kalai@gmail.com', 1500),
('appu', 'appu@gmail.com', 1000),
('jabu', 'jabu@gmail.com', 1050),
('kannu', 'kannu@gmail.com', 800),
('sumi', 'sumi@gmail.com', 1800);
COMMIT;
