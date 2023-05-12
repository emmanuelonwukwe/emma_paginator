<?php
    namespace Paginator;

    use Paginator\Traits\Paginator;
    use Exception;

    require "Traits/Paginator.php";
    
    class EmmaPaginator {
        use Paginator;

        /**
         * This will paginate and return the pagination data array
         * @param array<int, mixed> - The items to be paginated. This may be assoc array list from your db etc.
         * @param int $limit - The limit of the data per page
         * @return array<string, mixed>
         */
        public function paginate(array $items, int $limit = 25) {

            if (count($items) > 0) {

                return static::getPagingData($items, $limit);

            } else {
                throw new Exception("Total items must be greater than 0 in the list of items provided");
            }
        }
    }
    