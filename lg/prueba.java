import java.util.ArrayList;
import java.util.List;

public class Prueba {

    public static void main(String[] args) {
        getSerialList();
    }
    
    private static String getSerial() {
        var msg = "";
        for (int i = 0; i < 7; i++) {
            var car = "" + ((int) (Math.random() * 10));
            if (i == 0 && car.charAt(0) == '0') {
                i--;
            } else {
                msg = msg + car;
            }
        }
        return msg;
    }

    private static void getSerialList() {
        List<Integer> lista = new ArrayList<Integer>();
        for (int i = 0; i < 20; i++) {
            var aux = Integer.parseInt(getSerial());
            var res1 = getValidate(lista, aux);
            if (res1 == false) { 
                lista.add(aux);
                
            } else {
                i--;
            }
        }
        for (int i = 0; i < lista.size(); i++) {
            System.out.println(lista.get(i));
        }
    }

    private static boolean getValidate(List<Integer> lista, Integer number) {
        var res = false;
        for (int i = 0; i < lista.size(); i++) {
            if (number == lista.get(i)) {
                res = true;
            }
        }
        return res;
    }
    
    
    }