--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  `category` varchar(255) NOT NULL,
  `product_image` text NOT NULL,
  `average_rating` float(3,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`id`, `name`, `price`, `category`, `product_image`, `average_rating`) VALUES
(1, 'Tiny Handbags', 100.00, 'Fashion', 'gallery/handbag.jpeg', 5.0),
(2, 'Men\'s Watch', 300.00, 'Generic', 'gallery/watch.jpeg', 4.0),
(3, 'Trendy Watch', 550.00, 'Generic', 'gallery/trendy-watch.jpeg', 4.0),
(4, 'Travel Bag', 820.00, 'Travel', 'gallery/travel-bag.jpeg', 5.0),
(5, 'Plastic Ducklings', 200.00, 'Toys', 'gallery/ducklings.jpeg', 4.0),
(6, 'Wooden Dolls', 290.00, 'Toys', 'gallery/wooden-dolls.jpeg', 5.0),
(7, 'Advanced Camera', 600.00, 'Gadget', 'gallery/camera.jpeg', 4.0),
(8, 'Jewel Box', 180.00, 'Fashion', 'gallery/jewel-box.jpeg', 5.0),
(9, 'Perl Jewellery', 940.00, 'Fashion', 'gallery/perls.jpeg', 5.0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;
