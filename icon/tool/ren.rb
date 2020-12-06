#!/usr/bin/ruby
require 'fileutils'

count=1
while line = gets
  line.chomp!
  oldFname="n"+count.to_s+".gif"
  newFname=line+".gif"
  File.rename(oldFname,newFname)
  count.to_i
  count+=1
end
