<?php
include('offerInterface.php');
/**
 * Interface for The Collection class that contains Offers
 */
interface OfferCollectionInterface {
    /**
     * Add offer to the collection
     *
     * @param OfferInterface $offer
     * @return void
     */
    public function add(OfferInterface $offer);
    /**
     * Get offer at specific index
     *
     * @param int $index
     * @return OfferInterface
    2
     */
    public function get($index);
    /**
     * @return Iterator
     */
    public function getIterator();
}