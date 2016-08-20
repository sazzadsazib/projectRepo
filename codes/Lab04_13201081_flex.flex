import java.io.*;
import java.util.*;

enum Parse{ID, DIGIT, FOR}

%%

%class Lab04_13201081
%type Parse

%{
	public String str;
	public static Set<String> identifier = new HashSet<String>();
	public static Set<String> numValue = new HashSet<String>();
	public static Set <String> functions = new HashSet<String>();
	public static Set <String> keyword = new HashSet<String>();
	public static Set <String> logical = new HashSet<String>();
	public static Set <String> mathoperators = new HashSet<String>();
	public static Set <String> bracket = new HashSet<String>();
	public static Set <String> others = new HashSet<String>();
	
	
	public static void main(String args[]) throws IOException
	{
		Lab04_13201081 t = new Lab04_13201081(new FileReader(args[0]));
				
			Parse p = t.yylex();
			if(p == Parse.FOR) System.out.println();
			
			
		
		
		System.out.println();
		System.out.print("Identifier: ");
		for(Object i : identifier){
		
			System.out.print(i.toString()+",");
		}
		System.out.println();
		System.out.print("Number: ");
		for(Object i : numValue){
		
			System.out.print(i.toString()+",");
		}
		System.out.println();
		System.out.print("Logical Operator: ");
		for(Object i : logical){
		
			System.out.print(i.toString()+",");
		}
		System.out.println();
		System.out.print("Mathmetical operators: ");
		for(Object i : mathoperators){
		
			System.out.print(i.toString()+",");
		}
		System.out.println();
		System.out.print("Functions: ");
		for(Object i: functions){
		
			System.out.print(i.toString()+",");
		}
		System.out.println();
		System.out.print("Brackets: ");
		for(Object i : bracket){
		
			System.out.print(i.toString()+",");
		}
		System.out.println();
		System.out.print("Keywords: ");
		for(Object i: keyword){
		
			System.out.print(i.toString()+",");
		}
		System.out.println();
		System.out.print("Others: ");
		for(Object i : others){
		
			System.out.print(i.toString()+",");
		}
		
	}

%}

L = [a-zA-Z]
D = [0-9]
W = [ \r\n\t]
Brackets = [ ( | ) | { | } ]
O = [#|%|;|,]
q = [\"]
%%

{W}		{}
"for"		{return Parse.FOR;}
"main" | "scanf" | "printf" { functions.add(yytext());}
"int" | "double" | "float" | "if" | "else" | "for" | "return" | "stdio.h" | "include" {keyword.add(yytext()); }
"=" | ">=" | "<=" | ">" | "<" { logical.add(yytext());}
"+" | "-" | "*" | "/" {mathoperators.add(yytext());}
{Brackets} {bracket.add(yytext());} 
{L}({L}|{D})* 	{identifier.add(yytext());}
{D}+ 	{numValue.add(yytext());}
{D}+"."{D}* {numValue.add(yytext());}
{O} {others.add(yytext());}