<?php

require __DIR__ . '/../functions/booking.php';
require __DIR__ . '/../db/db.php';

$bookings = [];
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $bookings = getBookings();
}  

?>


<ul role="list" class="divide-y divide-gray-100">
  <li class="flex flex-row justify-between gap-x-6 py-5">
    <div class="flex flex-col gap-x-4">
    <?php foreach ($bookings as $booking) : ?>
      <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="https://api.dicebear.com/5.x/thumbs/svg?seed=<?=  $booking['id']; ?>&background=%23fff&radius=50&width=50&height=50}" alt="">
      <div class="min-w-0 flex-auto">
      
        <p class="text-sm font-semibold leading-6 text-gray-900"><?= $booking['name']; ?></p>
        <p class="mt-1 truncate text-xs leading-5 text-gray-500"><?= $booking['date']; ?></p>
       
      </div>
      <?php endforeach; ?>
    </div>
    <div class="hidden sm:flex sm:flex-col sm:items-end">
      
    </div>
  </li>
</ul>
