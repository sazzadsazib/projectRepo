import java.io.File;
import java.util.*;
import java.lang.*;
//author 13201081
public class Task01comp {
    
    
    public static void printHs (HashSet h) {
        for(Object x: h) {
            System.out.print(x+", ");
        }
        System.out.println();
        
    }
    public static boolean isNumeric( String input ) {
        try {
            double d = Double.valueOf(input);
            
            if (input.matches("d")){
                
                return true;
            } else {
                
                return true;
            }
        } catch (Exception e) {
            
            return false;
        }
        
    }
    
    
    
    public static void main(String[] args) {
        HashSet keywordHs = new HashSet();
        HashSet identifiersHs = new HashSet();
        HashSet mathOperatorHs = new HashSet();
        HashSet logicalOpHs = new HashSet();
        HashSet numericalHs = new HashSet();
        HashSet otherHs = new HashSet();
        
        
        ArrayList keywords = new ArrayList();
        ArrayList mathOp = new ArrayList();
        ArrayList logicalOp = new ArrayList();
        ArrayList otherOp = new ArrayList();
        
        
        keywords.add("abstract");
        keywords.add("assert");
        keywords.add("boolean");
        keywords.add("int");
        keywords.add("float");
        keywords.add("if");
        keywords.add("else");
        keywords.add("while");
        keywords.add("for");
        //adding mathoperators
        mathOp.add("+");
        mathOp.add("-");
        mathOp.add("%");
        mathOp.add("*");
        mathOp.add("/");
        mathOp.add("=");
        mathOp.add("!");
        //adding logical operators 
        logicalOp.add(">");
        logicalOp.add("<");
        logicalOp.add(">=");
        logicalOp.add("<=");
        logicalOp.add("==");
        logicalOp.add("!=");
        //done
        otherOp.add("(");
        otherOp.add(")");
        otherOp.add("{");
        otherOp.add("}");
        otherOp.add("[");
        otherOp.add("]");
        otherOp.add(";");
        otherOp.add(",");
        
        
        
        try {
            Scanner input = new Scanner(System.in);
            File file = new File("input.txt");
            
            input = new Scanner(file);
            
            
            while (input.hasNextLine()) {
                String line = input.nextLine();
                StringTokenizer st = new StringTokenizer(line);
                while (st.hasMoreTokens()) {
                    String x=st.nextToken(",\t  ");
                    
                    x = x.replace(";","");
                    if( keywords.contains(x)) {
                        keywordHs.add(x); 
                        
                    }else if( mathOp.contains(x)) {
                        mathOperatorHs.add(x); 
                        
                    }else if( logicalOp.contains(x)) {
                        logicalOpHs.add(x); 
                        
                    }else if (otherOp.contains(x)) {
                        otherHs.add(x);
                    }else if (isNumeric(x)) {
                        numericalHs.add(x);
                    }else {
                        identifiersHs.add(x);
                    }
                    // System.out.println(x);
                    
                    
                    
                }
                
                
                
            }
            input = new Scanner(file);
            while (input.hasNextLine()) {
                String line = input.nextLine();
                StringTokenizer st = new StringTokenizer(line);
                while (st.hasMoreTokens()) {
                    String x=st.nextToken("\t  ");
                    for (Object y: otherOp) {
                        java.lang.CharSequence pz=(java.lang.CharSequence) y;
                        if( x.contains(pz)) {
                            otherHs.add(pz);
                        }
                    }
                    
                }
            }
            
            
            
            System.out.print("Keywords : ");
            printHs(keywordHs);
            System.out.print("Identifiers : ");
            printHs(identifiersHs);
            System.out.print("MathOperator : ");
            printHs(mathOperatorHs);
            System.out.print("LogicalOperator : ");
            printHs(logicalOpHs);
            System.out.print("Numerical : ");
            printHs(numericalHs);
            System.out.print("Others : ");
            printHs(otherHs);
            
            // System.out.println("x");
            // input.close();
            
        } catch (Exception ex) {
            ex.printStackTrace();
        }
    }
    
}