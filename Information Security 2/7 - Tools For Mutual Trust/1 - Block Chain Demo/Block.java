import java.util.Arrays;

public class Block {
  private int previousHash;
  private String[] transactions;
  private int blockHash;

  public Block(int previousHash, String[] transactions) {
    super();

    this.setPreviousHash(previousHash);
    this.setTransactions(transactions);

    Object[] contents = { Arrays.hashCode(transactions), previousHash };
    this.setBlockHash(Arrays.hashCode(contents));

  }

  public String[] getTransactions() {
    return transactions;
  }

  public void setTransactions(String[] transactions) {
    this.transactions = transactions;
  }

  public int getPreviousHash() {
    return previousHash;
  }

  public void setPreviousHash(int previousHash) {
    this.previousHash = previousHash;
  }

  public int getBlockHash() {
    return blockHash;
  }

  public void setBlockHash(int blockHash) {
    this.blockHash = blockHash;
  }

  @Override
  public String toString() {
    return "Block [transactions=" + Arrays.toString(transactions) + " , blockHash=" + blockHash
        + ", previousBlockHash=" + previousHash + "]";
  }
}
