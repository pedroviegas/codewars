
/**
  * Project: Fun with lists: filter
  * By: viegas_pedro
  */
  <?php

function filter($h, $f) {
  return is_null($h) ? NULL : ($f($h->data) ? new Node($h->data, filter($h->next, $f)) : filter($h->next, $f));
}

