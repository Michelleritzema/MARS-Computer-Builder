package comptabiliteit;

public class Comptabiliteit {
	int compatibiliteitBehuizing;
	int compatibiliteitMoederbord;
	
	 public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		
	}
	 public int comptMotherboard()
	{
		if (ProcessSocket != MotherboardProcessSocket)
		{
			return compatibiliteitMoederbord = 2;
		}
		else if (RAMmemory > MotherboardMaxMemory)
		{
			return compatibiliteitMoederbord = 2;
		}
		else if (RAMsticks > MotherboardMemorySlots)
		{
			return compatibiliteitMoederbord = 2;
		}
		else if (GPUSlots > MotherboardGPUSlots)
		{
			return compatibiliteitMoederbord = 2;
		}
		else if (GPUSlotType != MotherboardGPUSlotType)
		{
			return compatibiliteitMoederbord = 2;
		}
		else if (HardDrives > MotherboardMaxHardDriveSlots)
		{
			return compatibiliteitMoederbord = 2;
		}
		else
		{
			return compatibiliteitMoederbord = 1;
		}
	}
	 
	 public int comptCasing()
	 {
		 if (HardDrives > CasingMaxHardDriveSlots)
		 {
			return compatibiliteitBehuizing = 2;
		 }
		 else if (GPUaantal > CasingMaxGPUSlots)
		 {
			 return compatibiliteitBehuizing = 2;
		 }
		 else if (GPULength > CasingMaxGPULength)
		 {
			 return compatibiliteitBehuizing = 2;
		 }
		 else if (procesCoolHeight > CasingMaxProcesCoolHeight)
		 {
			 return compatibiliteitBehuizing = 2;
		 }
		 else if (FanAmount > CasingMaxFanAmount)
		 {
			 return compatibiliteitBehuizing = 2;
		 }
		 else
		 {
			 return compatibiliteitBehuizing = 1;
		 }
	 }
	 public void comptabiliteitcheck()
	 {
		 if (compatibiliteitBehuizing == 1 && compatibiliteitMoederbord == 1 )
		 {
			 System.out.println("Alle onderdelen zijn comptitabel met elkaar");
		 }
		 else
		 {
			 System.out.println("Er is een comptabiliteitsprobleem opgedoken, controleer je invoer alsjeblieft");
		 }
	 }
}
