<?php 
include 'config.php';

// Pagination and Search Logic
$limit = 10;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
if($page < 1) $page = 1;
$offset = ($page - 1) * $limit;

$search = isset($_GET['search']) ? mysqli_real_escape_string($conn, $_GET['search']) : '';
$where_clause = "";
if(!empty($search)){
    $where_clause = "WHERE name LIKE '%$search%' OR message LIKE '%$search%'";
}

// Get Total Count
$count_sql = "SELECT COUNT(*) as total FROM prayer_request $where_clause";
$count_res = mysqli_query($conn, $count_sql);
$count_row = mysqli_fetch_assoc($count_res);
$total_records = $count_row['total'];
$total_pages = ceil($total_records / $limit);

// Get Data
$data_sql = "SELECT * FROM prayer_request $where_clause ORDER BY id DESC LIMIT $offset, $limit";
$res_data = mysqli_query($conn, $data_sql);

?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <title>Prayer Request Entries &#8211; Fr Peter Mary Rookey</title>
    <meta name="description" content="View prayer requests submitted to the International Compassion Ministry of Fr. Peter Mary Rookey." />
    <?php include 'includes/head-links.php'; ?>
    <style>
        .prayer-entries-section {
            padding: 40px 0;
            background: #fff;
        }
        .page-title {
            font-size: 28px;
            color: #1a4b7e;
            margin-bottom: 30px;
            font-weight: 600;
        }
        
        /* Table Controls (Search/Show) */
        .table-controls {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            font-size: 14px;
            color: #555;
        }
        .table-controls select {
             padding: 5px;
             border: 1px solid #ddd;
             border-radius: 4px;
        }
        .search-box input {
            padding: 6px 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-left: 10px;
        }

        /* Table Styling */
        .entries-table {
            width: 100%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
            border: 1px solid #ddd;
            margin-bottom: 20px;
        }
        .entries-table thead tr {
            background-color: #1a4b7e;
            color: #ffffff;
            text-align: left;
        }
        .entries-table th {
            padding: 12px 15px;
            font-weight: 600;
            font-size: 14px;
            border-right: 1px solid rgba(255,255,255,0.2);
        }
        .entries-table td {
            padding: 12px 15px;
            border-bottom: 1px solid #eee;
            font-size: 14px;
            color: #444;
            vertical-align: top;
            line-height: 1.5;
        }
        .entries-table tr:nth-of-type(even) {
            background-color: #f9f9f9;
        }
        .entries-table tr:hover {
            background-color: #f1f1f1;
        }
        
        /* Pagination Styling */
        .pagination-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 13px;
            color: #666;
            margin-top: 20px;
        }
        .pagination-links {
            display: flex;
            gap: 5px;
        }
        .pagination-links a, .pagination-links span {
            padding: 5px 10px;
            border: 1px solid #ddd;
            color: #1a4b7e;
            text-decoration: none;
            border-radius: 3px;
            background: #fff;
        }
        .pagination-links .active {
            background: #f5f5f5;
            color: #333;
            border-color: #ddd;
        }
        .pagination-links .dots {
            border: none;
            background: none;
            color: #999;
        }
        .pagination-links a:hover {
            background-color: #eee;
        }

        .btn-back {
            display: inline-block;
            color: #1a4b7e;
            text-decoration: none;
            font-weight: 600;
            white-space: nowrap;
        }
        .btn-back:hover {
            text-decoration: none;
        }
        .title-wrapper {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #8a98ba;
            margin-bottom: 30px;
            padding: 10px 0;
        }
        .title-wrapper .blog-title {
            border-bottom: none !important;
            margin-bottom: 0 !important;
            padding: 0 !important;
        }
    </style>
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <main class="prayer-entries-section">
        <div class="container">
            <div class="title-wrapper">
                <h1 class="blog-title">Prayer Request Entries</h1>
                <a href="prayer-requests.php" class="btn-back">&larr; Back to Submit Request</a>
            </div>

            <!-- Data Listing Section -->
            <div class="table-controls">
                <div>
                     Show 
                     <select onchange="window.location.href='?limit='+this.value">
                         <option value="10" <?php echo $limit == 10 ? 'selected' : ''; ?>>10</option>
                         <option value="25" <?php echo $limit == 25 ? 'selected' : ''; ?>>25</option>
                         <option value="50" <?php echo $limit == 50 ? 'selected' : ''; ?>>50</option>
                     </select>
                     entries
                </div>
                <div class="search-box">
                    <form action="" method="GET">
                        <label>Search: <input type="text" name="search" value="<?php echo htmlspecialchars($search); ?>"></label>
                    </form>
                </div>
            </div>

            <table class="entries-table">
                <thead>
                    <tr>
                        <th width="50">No.</th>
                        <th width="200">Name</th>
                        <th>Prayer Request Message</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(mysqli_num_rows($res_data) > 0): ?>
                        <?php 
                        $i = $offset + 1;
                        while($row = mysqli_fetch_assoc($res_data)): 
                        ?>
                        <tr>
                            <td><?php echo $i++; ?>)</td>
                            <td><?php echo htmlspecialchars($row['name']); ?></td>
                            <td><?php echo nl2br(htmlspecialchars($row['message'])); ?></td>
                        </tr>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="3" style="text-align:center; padding: 30px;">No prayer requests found.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>

            <div class="pagination-info">
                <div>
                    Showing <?php echo $total_records > 0 ? $offset + 1 : 0; ?> to <?php echo min($offset + $limit, $total_records); ?> of <?php echo $total_records; ?> entries
                </div>
                <div class="pagination-links">
                    <?php if($page > 1): ?>
                        <a href="?page=<?php echo $page-1; ?>&search=<?php echo urlencode($search); ?>&limit=<?php echo $limit; ?>">Previous</a>
                    <?php else: ?>
                        <span class="disabled">Previous</span>
                    <?php endif; ?>

                    <?php for($p=1; $p<=$total_pages; $p++): ?>
                        <?php if($p == $page): ?>
                            <a href="#" class="active"><?php echo $p; ?></a>
                        <?php elseif($p <= 5 || $p > $total_pages - 1 || abs($page - $p) < 2): ?>
                             <a href="?page=<?php echo $p; ?>&search=<?php echo urlencode($search); ?>&limit=<?php echo $limit; ?>"><?php echo $p; ?></a>
                        <?php elseif(abs($page - $p) == 2): ?>
                             <span class="dots">...</span>
                        <?php endif; ?>
                    <?php endfor; ?>

                    <?php if($page < $total_pages): ?>
                         <a href="?page=<?php echo $page+1; ?>&search=<?php echo urlencode($search); ?>&limit=<?php echo $limit; ?>">Next</a>
                    <?php else: ?>
                        <span class="disabled">Next</span>
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </main>

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/script-links.php'; ?>
</body>
</html>
