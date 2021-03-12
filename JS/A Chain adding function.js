/*
Project: A Chain adding function
By Pviegas
*/

var add = function(n) {
  const f = x => add(n + x)
  f.valueOf = () => n
  return f;
}
