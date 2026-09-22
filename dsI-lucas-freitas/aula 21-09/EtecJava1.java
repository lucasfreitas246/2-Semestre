public class EtecJava1{
    public static void main(String[] args){
        int cont=1, r=0, num=5;
        System.out.println("TAbuada do nº: "+num);
        do {
            r=num*cont;
            System.out.println(num+"X"+cont+"="+r);
            cont=cont+1;
        }
        while (cont<=9);
        System.exit(0);
    }
}