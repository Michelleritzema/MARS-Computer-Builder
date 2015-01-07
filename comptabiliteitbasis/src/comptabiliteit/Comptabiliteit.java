package comptabiliteit;

public class Comptabiliteit {
	int comptabiliteitBehuizing;
	int comptabiliteitMoederbord;
	
	 public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		
	}
	 public int comptMotherboard()
	{
		if (ProcessSocket != MotherboardProcessSocket)
		{
			return comptabiliteitMoederbord = 2;
		}
		else if (RAMmemory > MotherboardMaxMemory)
		{
			return comptabiliteitMoederbord = 2;
		}
		else if (RAMsticks > MotherboardMemorySlots)
		{
			return comptabiliteitMoederbord = 2;
		}
		else if (GPUSlots > MotherboardGPUSlots)
		{
			return comptabiliteitMoederbord = 2;
		}
		else if (GPUSlotType != MotherboardGPUSlotType)
		{
			return comptabiliteitMoederbord = 2;
		}
		else if (HardDrives > MotherboardMaxHardDriveSlots)
		{
			return comptabiliteitMoederbord = 2;
		}
		else
		{
			return comptabiliteitMoederbord = 1;
		}
	}
	 
	 public int comptCasing()
	 {
		 if (HardDrives > CasingMaxHardDriveSlots)
		 {
			return comptabiliteitBehuizing = 2;
		 }
		 else if (GPUaantal > CasingMaxGPUSlots)
		 {
			 return comptabiliteitBehuizing = 2;
		 }
		 else if (GPULength > CasingMaxGPULength)
		 {
			 return comptabiliteitBehuizing = 2;
		 }
		 else if (procesCoolHeight > CasingMaxProcesCoolHeight)
		 {
			 return comptabiliteitBehuizing = 2;
		 }
		 else if (FanAmount > CasingMaxFanAmount)
		 {
			 return comptabiliteitBehuizing = 2;
		 }
		 else
		 {
			 return comptabiliteitBehuizing = 1;
		 }
	 }
	 public void comptabiliteit()
	 {
		 if (comptabiliteitBehuizing == 1 && comptabiliteitMoederbord == 1 )
		 {
			 System.out.println("Alle onderdelen zijn comptitabel met elkaar");
		 }
		 else
		 {
			 System.out.println("Er is een comptabiliteitsprobleem opgedoken, controleer je invoer alsjeblieft");
		 }
	 }
}
