-- Table structure for table `user_info`
--

CREATE TABLE `admin_info`(


--
--
SELECT * FROM `admin_info` WHERE 1
--
--
SELECT `admin_email`, `admin_password` FROM `admin_info` WHERE 1
UPDATE `admin_info` SET `admin_email`='[value-1]',`admin_password`='[value-2]' WHERE 1
DELETE FROM `admin_info` WHERE 0
--

INSERT INTO `admin_info`(`admin_email`, `admin_password`) VALUES ('[value-1]','[value-2]')
--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`admin_id`);
  
  -- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;