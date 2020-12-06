# coding: utf-8
while line = gets
  line = line.split("class=name")[1];
  line.gsub!("spanali!--pklist","")
  print line
end
