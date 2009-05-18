package ajedrez;


public abstract class Pieza {

   protected String color;
   //protected boolean estado;

   public void setColor(String color) {
        this.color = color;
    }

   /* public void setEstado(boolean estado) {
        this.estado = estado;
    }*/

   public String getColor() {
        return color;
    }

   /*public boolean isEstado() {
        return estado;
    }*/

    public Pieza() {
        this.color = null;
        //this.estado = false;
    }
   

public void MoverComer()
{

}

public boolean BloqueoVertical(Pieza[][] matriz, int[] posicionInicial, int[] posicionFinal)
    {
        boolean x = true;
        int posIF = posicionInicial[0];
        int posIC = posicionInicial[1];
        int posFF = posicionFinal[0];
        //int posFC = posicionFinal[1];

        for (int i = posIF+1; i<posFF; i++)
        {
            if (matriz[i][posIC] != null)
            {
                x = false;
            }
        }
        return x;
    }

    public boolean BloqueoHorizontal(Pieza[][] matriz, int[] posicionInicial, int[] posicionFinal)
    {
        boolean x = true;
        int posIF = posicionInicial[0];
        int posIC = posicionInicial[1];
        //int posFF = posicionFinal[0];
        int posFC = posicionFinal[1];

        for (int i = posIC+1; i<posFC; i++)
        {
            if (matriz[posIF][i] != null)
            {
                x = false;
            }
        }
        return x;
    }

    public boolean BloqueoDiagonal(Pieza[][] matriz, int[] posicionInicial, int[] posicionFinal)
    {
        boolean x = true;
        int posIF = posicionInicial[0];
        int posIC = posicionInicial[1];
        int posFF = posicionFinal[0];
        //int posFC = posicionFinal[1];
        int j = posIC;

        for (int i = posIF+1; i<posFF; i++)
        {
            j++;
            if (matriz[i][j] != null)
            {
                x = false;
            }
        }
        return x;
    }

/*public void Comer()
{

}

public void ValidarEstado()
{

}*/

}
