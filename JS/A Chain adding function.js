/*
Project: A Chain adding function
By viegas_pedro
*/

var add = function(n) {
  const f = x => add(n + x)
  f.valueOf = () => n
  return f;
}
