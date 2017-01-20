1. 
Q: 請說明 Fixnum (整數) 和 Float (浮點數) 之間的差異
A: Fixnum is an integer, is a whole number with no decimal point, e.g. 42
   Float is a decimal number, e.g: 42.923812
   Usage:
   ex1: 16/5 =>3 
   ( Ruby will store the result as integer, if both operator are integers ) 
   ex2: 16/5.0=3.2, 16.0/5=>3.2, 16.0/5.0=>3.2 
   ( Ruby will store the result as decimal, if decimal operator exist)

2.
Q: 今天有兩個字串：
   str1 = "Hallo Welt!" 
   str2 = " NTU Rails 261!"
   請說明以下兩個印出字串的方式的不同處：
   puts str1 + str2
   puts "#{str1}#{str2}"
A: The printing result is the same, but 
   str1+str2 waste time & space by memory movement and operation as
   (a)retrie str1, str2 (b)add them up (c)put result back
   #{str1}#{str2}, inside #{..} is ruby code intepreted directly.
3. 
Q: 請解釋 array 和 hash 的不同處
A: Arrays are ordered, integer-indexed collections of any object.
   ex: days = ["Monday", "Tuesday", "Wednesday"], days[0] => "Monday"
   Hash is a collection of key-value pairs. It is similar to an Array, except 
   that indexing is done via arbitrary keys of any object type, not an integer index.
   ex: student = {name: 'John', email: "j1@g.com" }, student[:name]=>"John"

4.
Q: 請用一行程式碼從 [1, "a string", 3.14, [1,2,3,4]] 這個陣列找出所有非字串的值
A: [1, "a string", 3.14, [1,2,3,4]].reject { |x| x.is_a?(String) }   
   =>[1, 3.14, [1, 2, 3, 4]] 
   
5.
Q: 請用一行程式碼把一個內容為整數 1 到 100 的陣列裡所有的值加上 2
A: (1..100).map { |x| x += 2 }
    => [3, 4, 5, ... 100, 101, 102] 
6.
Q: 請寫出以下兩行程式碼迴傳的值，並解釋他們呼叫的方法差別為何：
   [1, 2, 3, 3].uniq
   [1, 2, 3, 3].uniq!
A: Most of the methods ending with bang (!) change the variable, 
   > arr=[1, 2, 3, 3]
   > arr.uniq! => [1,2,3]
   > arr =>[1, 2, 3]    <===== i.e.  arr value changed

   while those without it just return the altered variable.
   > arr=[1, 2, 3, 3]
   > arr.uniq => [1,2,3]
   > arr =>[1, 2, 3, 3]  <======  arr value not change

   
7.
Q: 請列出兩種產出亂數的方法
A: (a) arr.shuffle!.last
   (b) arr.sample
   
8.
Q: 以下這段程式碼：
   ((1 > 3)&&(true == true))||(!!!false)
   會執行出什麼結果？ 請試試不用 irb 算出結果
A: true, since (!!!false) reverse 3 times become true, and "||" means logic "or"

9.
Q: 請問 binding.pry 是什麼？ 要如何使用它？
A: After Pry library installed using "gem install pry", we can insert "binding.pry" 
   anywhere in the code, and the execution will pause there, allowing you to inspect all 
   objects.
   i.e. Binding is a built-in ruby class whose objects can encapsulate the context of your 
   current scope (variables, methods etc.), and retain them for use outside of that 
   context. Calling binding.pry is essentially 'prying' into the current binding or 
   context of the code, from outside your file.

10.
Q: 下面的一段程式碼，請嘗試用其他方法把 if...else...end 簡化成一行
   var = 5
   if var >= 5
     return "var is greater than or equal to 5"
   else
     return "var is less than 5"
   end
A: return  var >= 5 ? "var is greater than or equal to 5" : "var is less than 5"

11.
Q: 請列出兩種不同的 hash 寫法
A: (a) student = {:name => 'John', :email => "j1@g.com" }
   (b) student = {name: 'John', email: "j1@g.com" }
