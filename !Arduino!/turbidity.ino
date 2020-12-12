#include <SoftwareSerial.h>
#define DEBUG true
int pinsensor = A0;
float tegangan;
float ntu;

//int Sendata;
SoftwareSerial wifi(2, 3); // RX, TX
char *apiKey = "3MTSCLVJ74UC1SB6"; // masukan sesuai apiKey yang anda dapat dari geeknesia.com
void setup() {
 
  wifi.begin(9600); // deklarasi boutrate komunikasi serial antara arduino dengan ESp
  Serial.begin(9600);
  // Reset modul
  sendCommand("AT+RST\r\n", 2000, DEBUG);
  // Konfigurasikan sebagai Akses poin
 sendCommand("AT+CWMODE=3\r\n", 1000, DEBUG);
  // Sesuaikan dengan SSID dan Password
  sendCommand("AT+CWJAP=\"iphonefajar\",\"pekanbaru01\"\r\n", 10000, DEBUG);
  // Mendapatkan IP adress
  sendCommand("AT+CIFSR\r\n", 1000, DEBUG);

}

void loop() {                           //main program
connectingServer() ;
Senddata("sensor", ntu);
float oo=0;
  tegangan = 00;
  for (int i = 00; i < 800; i++)
  {
    tegangan += ((float)analogRead(pinsensor) / 1023) * 5;
  }
  tegangan = tegangan / 800;
  tegangan = round_to_dp(tegangan, 1);

  if (tegangan < 1) {
     ntu = -1120.4 * square(tegangan) + 5742.3 * tegangan - 4353.8;
    
  }
  else {
    ntu = -1120.4 * square(tegangan) + 5742.3 * tegangan - 4353.8;
  }
ntu=(ntu*0.03);
ntu=map(ntu,400,0,0,400);
ntu=ntu-260;
//ntu=oo-4000;
  Serial.print("tegangan: ");
  Serial.print(tegangan);
  Serial.print("  NTU: ");
  Serial.println(ntu);

  delay(10);
}

float round_to_dp( float nilaibaca, int desimal)
{
  float multiplier = powf( 10.0f, desimal );
  nilaibaca = roundf( nilaibaca * multiplier ) / multiplier;
  return nilaibaca;
}

void connectingServer() // fungsi untuk koneksi esp ke geeknesia menggunakan port HTTp
{
  String cmd = "AT+CIPSTART=\"TCP\",\"";
  cmd += "techkuy.my.id/data_air";
  cmd += "\",443";
  wifi.println(cmd);
  delay(2000);
  //cmd="";
  if (wifi.find("Error"))
  {
    return;
  }
}

void Senddata(String Variable, unsigned int data) // fungsi untuk send data
{
  unsigned long sendData = millis();
  String cmd;
    String cmd1;
    cmd = "AT+CIPSEND=120"; //tadi 180
    cmd1 = "GET /input.php?ntu=";
    cmd1 += ntu;
    cmd1 += "&&tegangan=";
    cmd1 += tegangan;
    cmd1 += " HTTP/1.1\r\nHost:";
    cmd1 += " techkuy.my.id/data_air\r\n\r\n";
    wifi.println(cmd);
    wifi.println(cmd1);
    //Serial.print("oli1 = ");
    //Serial.print(oli1);
    //Serial.print("\r\n");
    delay(1);

    String response = "";
    long int time = millis();
    while (wifi.available())
    {
      char c = wifi.read();
      response += c;
    }
    //Serial.print(response);
    return response;
    delay(1);

  }

String sendCommand(String command, const int timeout, boolean debug)
{
  String response = "";
  wifi.print(command);
  long int time = millis();

  while ( (time + timeout) > millis())
  {
    while (wifi.available())
    {
      char c = wifi.read();
      response += c;
    }
  }

  if (debug) {
    Serial.print(response);
  }
  return response;
}