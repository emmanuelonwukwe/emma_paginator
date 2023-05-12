<?php 
        use Paginator\EmmaPaginator;
        
        require "src/EmmaPaginator.php";

        //set the items array<int, mixed> to be paginated
        $items = [1, 2, 3, 4, 6, 7, 7,9];
    
        $limit = 2; // that is 2 items per page
    
        //get paginator instance
        $paginator = new EmmaPaginator();
    
        //call the paginate function to generate the paging data for you
        $paginated_data = $paginator->paginate($items, $limit);
    
        //See the paginated data on your browser
        print_r($paginated_data);