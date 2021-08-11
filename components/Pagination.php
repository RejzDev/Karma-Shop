<?php
    
    /*
     * Класс для генерации постраничной навигации
     */
    
    class Pagination
    {
        
        /**
         *
         * @var Page navigation links
         *
         */
        private $max = 10;
        
        /**
         *
         * @var The key for GET, into which the page number is written
         *
         */
        private $index = 'page';
        
        /**
         *
         * @var Current page
         *
         */
        private $current_page;
        
        /**
         *
         * @var Total number of records
         *
         */
        private $total;
        
        /**
         *
         * @var Posts per page
         *
         */
        private $limit;
        
        /**
         * Running the required data for navigation
         * @param integer $total
         * @param integer $limit
         *
         * @return
         */
        public function __construct($total, $currentPage, $limit, $index)
        {
            # Set the total number of records
            $this->total = $total;
    
            # Set the number of posts per page
            $this->limit = $limit;
    
            # Set the key to url
            $this->index = $index;
    
            # Set the number of pages
            $this->amount = $this->amount();
    
            # Set the current page number
            $this->setCurrentPage($currentPage);
        }
        
        /**
         *  To display links
         *
         * @return HTML code with navigation links
         */
        public function get()
        {
            # To record links
            $links = null;
            
            # We get constraints for the cycle
            $limits = $this->limits();
            
            $html = '<div class="pagination">';
            # Generating links
            for ($page = $limits[0]; $page <= $limits[1]; $page++) {
                # If the current page is the current page, there is no link and an active class is added
                if ($page == $this->current_page) {
                    $links .= '<a href="#" class="active">' . $page . '</a>';
                } else {
                    # Otherwise, generate a link
                    $links .= $this->generateHtml($page);
                }
            }
    
            # If links have been created
            if (!is_null($links)) {
                # If the current page is not the first
                if ($this->current_page > 1)
                    # If the current page is not the first
                    $links = $this->generateHtml(1, '&lt;') . $links;
    
                # If the current page is not the first
                if ($this->current_page < $this->amount)
                    # Create a link "To the last"
                    $links .= $this->generateHtml($this->amount, '&gt;');
            }
            
            $html .= $links . '</div>';
            
           
            return $html;
        }
        
        /**
         * To generate the HTML code of the link
         * @param integer $page
         *
         * @return
         */
        private function generateHtml($page, $text = null)
        {
            # If link text is not specified
            if (!$text)
                # We indicate that the text is the page number
                $text = $page;
            
            $currentURI = rtrim($_SERVER['REQUEST_URI'], '/') . '/';
            $currentURI = preg_replace('~/page-[0-9]+~', '', $currentURI);
            # Form the HTML code of the link and return
            return
                '<a href="' . $currentURI . $this->index . $page . '">' . $text . '</a>';
        }
        
        /**
         * To get where to start
         *
         * @return
         */
        private function limits()
        {
            # Calculate links on the left (so that the active link is in the middle)
            $left = $this->current_page - round($this->max / 2);
    
            # Calculate the origin
            $start = $left > 0 ? $left : 1;
    
            # If there are at least $ this-> max pages ahead
            if ($start + $this->max <= $this->amount)
                # Assign the end of the loop forward to $ this-> max pages or just to the minimum
                $end = $start > 1 ? $start + $this->max : $this->max;
            else {
                # End - total number of pages
                $end = $this->amount;
    
                # Start is minus $ this-> max from end
                $start = $this->amount - $this->max > 0 ? $this->amount - $this->max : 1;
            }
            
          
            return
                array($start, $end);
        }
        
        /**
         * To set the current page
         *
         * @return
         */
        private function setCurrentPage($currentPage)
        {
            # Get the page number
            $this->current_page = $currentPage;
    
            # If the current page is more than zero
            if ($this->current_page > 0) {
                # If the current page is less than the total number of pages
                if ($this->current_page > $this->amount)
                    # Set the page to last
                    $this->current_page = $this->amount;
            } else
                # Set the page to the first
                $this->current_page = 1;
        }
        
        /**
         * To get the total number of pages
         *
         * @return
         */
        private function amount()
        {
           
            return ceil($this->total / $this->limit);
        }
        
    }
