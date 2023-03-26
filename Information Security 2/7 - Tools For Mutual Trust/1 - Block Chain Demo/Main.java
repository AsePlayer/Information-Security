import java.util.ArrayList;
import java.util.*;

class Main {
  public static void main(String[] args) {

    ArrayList<Block> blockChain = new ArrayList<>();

    String statement1 = "This Hash Is NOT So Bussin'";
    int hashvalue = statement1.hashCode();

    System.out.println("Statement = '" + statement1 + "' whose hash value = " + hashvalue);

    String[] initialTransaction = {"shad has $990"};
    Block block1 = new Block(hashvalue, initialTransaction);
    blockChain.add(block1);
    System.out.println("The hash for block1 is " + block1.getBlockHash());

    String[] shadGivesItAllAway = {"shad gives $100 to conner", "shad gives $100 to tim", "shad gives $100 to michael", "shad gives $100 to alec", "shad gives $100 to ryan", "shad give $100 to lamar", "shad gives $300 to even"};
    Block block2 = new Block(block1.getBlockHash(), shadGivesItAllAway);
    blockChain.add(block2);
    System.out.println("The hash for block2 is " + block2.getBlockHash());

    String[] moreTransactions = {"nvart gives $50 to kevin", "connor gives $10 to aaron"};
    Block block3 = new Block(block2.getBlockHash(), moreTransactions);
    blockChain.add(block3);
    System.out.println("The hash for block3 is " + block3.getBlockHash());
    System.out.println("-----------------------------------------------");

    // Printing chain and checking for discrepancies
    for(int i = 0; i < blockChain.size(); i++) {
      System.out.println("Block #" + (i + 1) + " is " + blockChain.get(i).toString() + "\n");
      if(i < blockChain.size() - 1 && blockChain.get(i).getBlockHash() != blockChain.get(i+1).getPreviousHash()) {
        System.out.println("SOMEONE MESSED WITH THE BLOCKCHAIN!!!!!!");
      }
    }

    // Muahaha, I am going to edit Block2's transaction!
    String[] evilDoer = {"kevin gives $5000 to nvart", "connor gives $1000 to aaron"};
    blockChain.set(1, new Block(hashvalue, evilDoer));
    
    // My Evil Plan is in Motion!
    System.out.println("The NEW hash for block2 is " + blockChain.get(1).getBlockHash() + "\n");
    
    // Printing chain and checking for discrepancies
    for(int i = 0; i < blockChain.size(); i++) {
      System.out.println("Block #" + (i + 1) + " is " + blockChain.get(i).toString() + "\n");
      if(i < blockChain.size() - 1 && blockChain.get(i).getBlockHash() != blockChain.get(i+1).getPreviousHash()) {
        System.out.println("SOMEONE MESSED WITH THE BLOCKCHAIN!!!!!!");
      }
    }
  }
}