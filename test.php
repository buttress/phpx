<?php

$template = <<<TEMP
`%s`
```%s
phpxphpxphpxphpxphpxphpxphpxphpxphpxphpxphpxphpxphpxphpxphpxphpxphpxphpxphpxphpxphpxphpxphpxphpxphpxphpxphpxphpxphpxphpx
h                                         ________  _______   ________  ________                                       p
p                                        ╱        ╲╱    ╱  ╲╲╱        ╲╱    ╱   ╲                                      h
x                                       ╱         ╱        ╱╱         ╱_       _╱                                      p
p                                      ╱╱      __╱         ╱╱      __╱         ╱                                       x
h                                      ╲╲_____╱  ╲___╱____╱╲╲_____╱  ╲___╱___╱╱                                        p
p                                                                                                                      h
xphpxphpxphpxphpxphpxphpxphpxphpxphpxphpxphpxphpxphpxphpxphpxphpxphpxphpxphpxphpxphpxphpxphpxphpxphpxphpxphpxphpxphpxphp
```
TEMP;
$options = ["Cucumber","abap","ada","ahk","apacheconf","applescript","as","as3","asy","bash","bat","befunge","blitzmax","boo","brainfuck","c","cfm","cheetah","cl","clojure","cmake","coffeescript","console","control","cpp","csharp","css","cython","d","delphi","diff","dpatch","duel","dylan","erb","erl","erlang","evoque","factor","felix","fortran","gas","genshi","glsl","gnuplot","go","groff","haml","haskell","html","hx","hybris","ini","io","ioke","irc","jade","java","js","jsp","lhs","llvm","logtalk","lua","make","mako","maql","mason","markdown","modelica","modula2","moocode","mupad","mxml","myghty","nasm","newspeak","objdump","objectivec","objectivej","ocaml","ooc","perl","php","postscript","pot","pov","prolog","properties","protobuf","py3tb","pytb","python","r","rb","rconsole","rebol","redcode","rhtml","rst","sass","scala","scaml","scheme","scss","smalltalk","smarty","sourceslist","splus","sql","sqlite3","squidconf","ssp","tcl","tcsh","tex","text","v","vala","vbnet","velocity","vim","xml","xquery","xslt","yaml"];

foreach ($options as $option) {
    echo sprintf($template, $option, $option);
    echo "\n\n\n";
}
