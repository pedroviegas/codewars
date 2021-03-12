
/**
  * Project: Coding Meetup #8 - Higher-Order Functions Series - Will all continents be represented?
  * By: viegas_pedro
  */
  <?php

function all_continents(array $a): bool {
    return count(array_unique(array_column($a, 'continent'))) == 5 ? true : false;
}
