<?php
    //Creation and assignment of variables and values respectively
    $servername = "127.0.0.1";
    $username = "username";
    $password = "";
    $databaseName = "Gamers_Den";
    $handler = mysqli_connect($servername, $username, $password, $databaseName);

    //Creates the handler
    if (!$handler) {
        die("Connection failed: " . mysqli_connect_error());
    }
    else {
        echo "Connection success";
    }

    //Creates the table to store account details
    $query = "CREATE TABLE account_details (
        email VARCHAR(50) NOT NULL PRIMARY KEY,
        pass VARCHAR(25) NOT NULL
        )";
    mysqli_query($handler, $query);


    //Creates the table to store the user's cart items
    //Need to think of primary key
    //stat - either purchased or pending; only pending products will be displayed at the checkout screen
    $query = "CREATE TABLE shopping_cart (
            account VARCHAR(50) NOT NULL,
            productName VARCHAR(50) NOT NULL,
            quantity int(1) NOT NULL,
            price double(10, 2) NOT NULL,
            stat VARCHAR(30) NOT NULL
            )";
    mysqli_query($handler, $query);

//---------------------------------------------------------------------------------------------------------------------------------------------------------------//

    //SQL query to create the table to store laptop details
    $query = "CREATE TABLE laptop_details (
        laptopName VARCHAR(50) NOT NULL PRIMARY KEY,
        cpu VARCHAR(30) NOT NULL,
        gpu VARCHAR(60) NOT NULL,
        display VARCHAR(70) NOT NULL,
        ram VARCHAR(60) NOT NULL,
        storage VARCHAR(50) NOT NULL,
        os VARCHAR(50) NOT NULL,
        color VARCHAR(30) NOT NULL,
        price DOUBLE(20,2) NOT NULL
    )";
    //Creates laptop details table
    mysqli_query($handler, $query);

    //Inserts the details into the laptop details table
    $query = "INSERT INTO laptop_details (laptopName, cpu, gpu, display, ram, storage, os,  color, price)
                VALUES 
                ('MSI Pulse GL76 11UEK', '11th Gen Intel Core i7-11800H', 'NVIDIA GeForce RTX3060 (6GB VRAM)', 
                '17.3\" 1920x1080 FHD IPS-LCD, 144Hz refresh rate', '16GB DDR4-3200Mhz expandable up to 64GB', '1TB NVMe SSD', 'Windows 10 Home Edition', 'Titanium Grey', 6999.00),
                ('ASUS ROG Zephyrus G14', '3rd Gen AMD Ryzen 9 4900HS', 'NVIDIA GeForce RTX2060 Max-Q (6GB VRAM)', 
                '14.0\" 1920x1080 FHD IPS-LCD, 120Hz refresh rate', '16GB DDR4-3200Mhz expandable up to 32GB', '1TB NVMe SSD', 'Windows 10 Home Edition', 'Eclipse Grey', 5299.00),
                ('ASUS ROG Strix G15', '10th Gen Intel Core i7-10875H', 'NVIDIA GeForce RTX2070 Super (8GB VRAM)', 
                '15.6\" 1920x1080 FHD IPS-LCD, 240Hz refresh rate', '16GB DDR4-3200Mhz expandable up to 64GB', '1TB NVMe SSD', 'Windows 10 Home Edition', 'Solar Black', 5999.00),
                ('Razer Blade 14', '4th Gen AMD Ryzen 9 5900HX', 'NVIDIA GeForce RTX3080 (8GB VRAM)', 
                '14.0\" 2560x1440 QHD IPS-LCD, 165Hz refresh rate', '16GB DDR4-3200Mhz non-expandable', '1TB PCIe NVMe SSD', 'Windows 10 Home Edition', 'Black', 11599.00),
                ('Acer Nitro 5', '4th Gen AMD Ryzen 7 5800H', 'NVIDIA GeForce RTX3060 (6GB VRAM)', 
                '15.6\" 1920x1080 FHD IPS-LCD, 144Hz refresh rate', '8GB DDR4-3200Mhz expandable up to 32GB', '512GB NVMe SSD + 1 additional HDD slot', 'Windows 10 Home Edition', 'Black', 4899.00),
                ('Acer Predator Helios 300', '10th Gen Intel Core i7-10870H', 'NVIDIA GeForce RTX3080 (8GB VRAM)', 
                '15.6\" 1920x1080 FHD IPS-LCD, 240Hz refresh rate', '32GB DDR4-3200Mhz expandable up to 64GB', '1TB PCIe NVMe SSD', 'Windows 10 Home Edition', 'Abyss Black', 9530.00)";
    mysqli_query($handler, $query);

//--------------------------------------------------------------------------------------------------------------------------------------------------------------------------//

    //Creates the desktop details table to store desktop details
    $query = "CREATE TABLE desktop_details (
        desktopName VARCHAR(50) NOT NULL PRIMARY KEY,
        cpu VARCHAR(30) NOT NULL,
        gpu VARCHAR(60) NOT NULL,
        ram VARCHAR(60) NOT NULL,
        storage VARCHAR(50) NOT NULL,
        os VARCHAR(50) NOT NULL,
        color VARCHAR(30) NOT NULL,
        price DOUBLE(20,2) NOT NULL
    )";
    mysqli_query($handler, $query);

    //Inserts the details into the desktop details table
    $query = "INSERT INTO desktop_details (desktopName, cpu, gpu, ram, storage, os, color, price)
                VALUES
                ('Alienware Aurora Ryzen Edition R10', '3rd Gen AMD Ryzen 9 3950X', 'NVIDIA GeForce RTX2080Ti', '64GB DDR4-3600Mhz', 
                '2TB PCIe NVMe SSD + 2TB SATA 7200RPM HDD', 'Windows 10 Pro Edition', 'Lunar White', 8999.00),
                ('MSI Trident 3', '10th Gen Intel Core i7-10700', 'NVIDIA GeForce RTX2060 Super', '64GB DDR4-2666Mhz', 
                '1TB PCIe NVMe SSD + 1TB 2.5\" 7200RPM HDD', 'Windows 10 Home Edition', 'Gunmetal Gray', 6900.00),
                ('HP OMEN 25L Desktop PC', '4th Gen AMD Ryzen 7 5800X', 'NVIDIA GeForce RTX3070 (8GB VRAM) + AMD Radeon Graphics', '16GB DDR4-3200Mhz Dual-Channel', 
                '1TB PCIe NVMe SSD', 'Windows 10 Home Edition', 'Omen Grey', 8199.00)";
    mysqli_query($handler, $query);

//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------//

    //Creates the mice details table to store mice details
    $query = "CREATE TABLE mice_details (
        miceName VARCHAR(50) NOT NULL PRIMARY KEY,
        sensorType VARCHAR(30) NOT NULL,
        sensorModel VARCHAR(30) NOT NULL,
        connectionType VARCHAR(40) NOT NULL,
        lighting VARCHAR(30) NOT NULL,
        sensitivity VARCHAR(30) NOT NULL,
        pollingRate VARCHAR(50) NOT NULL,
        buttons VARCHAR(20) NOT NULL,
        measurements VARCHAR(30) NOT NULL,
        color VARCHAR(30) NOT NULL,
        price DOUBLE(20,2) NOT NULL)";
    mysqli_query($handler, $query);

    //Inserts the details into the mice details table
    $query = "INSERT INTO mice_details (miceName, sensorType, sensorModel, connectionType, lighting, sensitivity, pollingRate, buttons, measurements, color, price)
                VALUES
                ('Razer DeathAdder V2', 'Optical', 'Razer Focus+', 'Wired USB', 'Razer Chroma RGB', '100 to 20,000 DPI', 'Up to 1000Hz (1ms)', '8', '5 x 2.43 x 1.68 inches', 'Black', 399.00),
                ('Logitech G203 Lightsync', 'Optical', 'Not Available', 'Wired USB', 'Logitech Lightsync RGB', '200 to 8,000 DPI', '1000Hz (1ms)', '6', '4.59 x 2.45 x 1.50 inches', 'White', 150.00),
                ('Razer Naga Pro', 'Optical', 'Razer Focus+', 'Wireless USB', 'Razer Chroma RGB', '100 to 20,000 DPI', 'Up to 1000Hz (1ms)', 'Up to 19+1', '4.69 x 2.93 x 1.69 inches', 'Black', 600.00),
                ('Corsair Ironclaw RGB', 'Optical', 'Pixart PMW3391', 'Slipstream Wireless USB + Bluetooth', 'iCUE RGB', 'Up to 18,000 DPI', 'Up to 1000Hz (1ms)', '5', '5.5 x 3 x 1.6 inches', 'Black', 240.00),
                ('SteelSeries Rival 310', 'Optical', 'TrueMove Pro', 'Wired USB', '2 RGB zone' ,'100 to 12,000 CPI', 'Up to 1000Hz (1ms)', '8', '41.89 x 127.6 x 57.16mm', 'Black', 400.00),
                ('Razer Viper Ultimate', 'Optical', 'Razer Focus+', 'Hyperspeed Wireless USB', 'No RGB', 'Up to 20,000 DPI', '1000Hz (1ms)', '8', '4.99 x 2.27 x 1.49 inches', 'Black', 700.00),
                ('Logitech G Pro Wireless', 'Optical', 'HERO 25k', 'Lightspeed Wireless USB', 'Lightsync RGB', '100 to 25,600 DPI', '1000Hz (1ms)', '6', '62.15 x 116.60 x 38.20mm', 'Black', 699.00),
                ('Razer Basilisk V2', 'Optical', 'Razer Focus+', 'Wired USB', 'Razer Chroma RGB', 'Up to 20,000 DPI', '1000Hz (1ms)', '11', '5.11 x 2.36 x 1.65 inches', 'Black', 250.00),
                ('Glorious Model O Wireless', 'Optical', 'Glorious BAMF Sensor', 'Wireless USB', 'Glorious RGB', '400 to 19,000 DPI', '1000Hz (1ms)', '6', '128 x 66 x 37.5mm', 'White', 570.00)";
    mysqli_query($handler, $query);

//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------//

    //Creates the keyboard details table to store keyboard details
    $query = "CREATE TABLE keyboard_details (
        keyboardName VARCHAR(50) NOT NULL PRIMARY KEY,
        switch VARCHAR(50) NOT NULL,
        keycap VARCHAR(30) NOT NULL,
        lighting VARCHAR(30) NOT NULL,
        connectionType VARCHAR(30) NOT NULL,
        dimensions VARCHAR(30) NOT NULL,
        color VARCHAR(30) NOT NULL,
        price DOUBLE(20,2) NOT NULL
    )";
    mysqli_query($handler, $query);

    //Inserts the details into the keyboard details table
    $query = "INSERT INTO keyboard_details (keyboardName, switch, keycap, lighting, connectionType, dimensions, color, price)
                VALUES
                ('Corsair K100', 'Corsair OPX RGB optical-mechanical', 'Double-shot PBT plastic', 'Corsair iCUE per-key RGB', 'Wired USB', '18.5 x 6.5 x 1.5 inches', 'Midnight Black', 800.00),
                ('Everest Max', '3-Pin Cherry MX Brown', 'Single-shot ABS plastic', 'Per-key RGB', 'Wired USB Type-C', '265 x 461 x 43mm', 'Gunmetal Gray', 1250.00),
                ('Razer Cynosa Chroma', 'Mechanical-membrane keyboard', 'Single-shot ABS plastic', 'Razer Chroma Per-key RGB', 'Wired USB', '18 x 6.85 x 1.3 inches', 'Black', 250.00),
                ('G.SKILL KM360', 'Cherry MX Red, spacebar: Cherry MX Black', 'Double-shot ABS plastic', 'White backlight', 'Detachable wired USB Type-C', '14.13 x 5.18 x 1.47 inches', 'Midnight Black', 210.00)";
    mysqli_query($handler, $query);

//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------//

    //Creates the monitor details table to store monitor details
    $query = "CREATE TABLE monitor_details (
        monitorName VARCHAR(50) NOT NULL PRIMARY KEY,
        display VARCHAR(50) NOT NULL,
        refreshRate VARCHAR(30) NOT NULL,
        responseTime VARCHAR(30) NOT NULL,
        brightness VARCHAR(30) NOT NULL,
        contrastRatio VARCHAR(30) NOT NULL,
        colorGamut VARCHAR(30) NOT NULL,
        price DOUBLE (20,2) NOT NULL
    )";
    mysqli_query($handler, $query);

    //Inserts the details into the monitor details table
    $query = "INSERT INTO monitor_details (monitorName, display, refreshRate, responseTime, brightness, contrastRatio, colorGamut, price)
                VALUES
                ('ASUS TUF Gaming Monitor VG249Q', '23.8\" FHD 1920x1080 IPS-LCD', '144Hz', '1ms', '250cd/m^2', '1000:1', '16.7 million colours', 899.00),
                ('AOC 24G2', '24.0\" FHD 1920x1080 IPS-LCD', 'HDMI: 144Hz; VGA: 60Hz', '1ms', '250cd/m^2', '1000:1', '16.7 million colours',  799.00),
                ('LG 27GN950-B Ultra Gear', '27.0\" 4K-UHD 3840x2160 IPS-LCD', '144Hz', '1ms', '400cd/m^2', '1000:1', '1.07 billion colours', 3400.00)";
    mysqli_query($handler, $query);
?>