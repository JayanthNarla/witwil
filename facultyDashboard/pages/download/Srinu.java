class Srinu
 {
   int id;
   String name;
   Srinu()
    {
      System.out.println("default constructor");
    }
   Srinu(int i,String n)
    {
      id=i;
      name=n;
      System.out.println("id is"+id+"name is"+name);
    }
   public static void main(String args[])
    {
      Srinu s1 = new Srinu();
      Srinu s2 = new Srinu(10,"karim");
    }
}